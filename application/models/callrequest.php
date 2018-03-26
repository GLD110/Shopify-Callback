<?php
class Callrequest_model extends Master_model
{
  protected $_tablename = 'callrequest';
  private $_total_count = 0;
  private $_arrCallrequestKey = array();

  function __construct() {
    parent::__construct();

    // Get the variant id list
    $query = parent::getList();

    if( $query->num_rows > 0 )
    foreach( $query->result() as $row )
    {
      $this->_arrCallrequestKey[] = $row->variant_id;
    }
  }

  public function getTotalCount(){ return $this->_total_count; }

  /**
  * Get the list of Callrequest/ varints
  * array(
  *     'supplier' => '',   // String
  *     'name' => '',       // String
  *     'sku' => '',        // String
  *     'supplier_category' => '',   // String
  *     'price' => '',               // String "{from} {to}"
  *     'Callrequest_id' => '',             // String
  *     'variant_id' => '',             // String
  *     'sort' => '',                   // String "{column} {order}"
  *     'Callrequest_only' => '',           // Boolean true/false : default :false
  *     'page_number' => '',            // Int, default : 0
  *     'page_size' => '',              // Int, default Confing['PAGE_SIZE'];
  *     'is_imported' => '',            // Int, 0: all, 1: published, 2: not-published / default : 0
  *     'is_queue' => '',               // Int, 0: all, 1: queue, 2: not-queue, / default : 0
  *     'is_stock' => '',               // Int, 0: all, 1: in stock, 2: out of stock / default 0
  );
  */
  public function getList( $arrCondition )
  {
      $where = array( 'shop' => $this->_shop );

      // Build the where clause
      if( !empty( $arrCondition['name'] ) ) $where["title LIKE '%" . str_replace( "'", "\\'", $arrCondition['name'] ) . "%'"] = '';

      // Callrequest only - Group by, Get total records
      if( isset( $arrCondition['page_number'] ) )
      {
        // Get the count of records
        foreach( $where as $key => $val )
        if( $val == '' )
            $this->db->where( $key );
        else
            $this->db->where( $key, $val );
        $query = $this->db->get( $this->_tablename);
        $this->_total_count = $query->num_rows();
      }

      // Sort
      if( isset( $arrCondition['sort'] ) ) $this->db->order_by( $arrCondition['sort'] );
      $this->db->order_by( 'callrequest_id', 'DESC' );

      // Limit
      if( isset( $arrCondition['page_number'] ) )
      {
          $page_size = isset( $arrCondition['page_size'] ) ? $arrCondition['page_size'] : $this->config->item('PAGE_SIZE');
          $this->db->limit( $page_size, $arrCondition['page_number'] );
      }

      foreach( $where as $key => $val )
      if( $val == '' )
          $this->db->where( $key );
      else
          $this->db->where( $key, $val );
      $query = $this->db->get_where( $this->_tablename );

      $arrReturn = array();
      foreach( $query->result() as $row )
      {
        $arrReturn[] = $row;
      }

      return $arrReturn;
  }

  // Get last updated date
  public function getLastUpdateDate()
  {
      $return = '';

      $this->db->select( 'updated_at' );
      $this->db->order_by( 'updated_at DESC' );
      $this->db->limit( 1 );
      $this->db->where( 'shop', $this->_shop );

      $query = $this->db->get( $this->_tablename );

      if( $query->num_rows() > 0 )
      {
          $res = $query->result();

          $return = $res[0]->updated_at;
      }

      return $return;
  }

  // Add Callrequest to database
  public function addCallrequest( $Callrequest )
  {
    // Get the images as array
    $arrImage = array();
    if( isset($Callrequest->images) && is_array($Callrequest->images) )
    {
      foreach( $Callrequest->images as $item ) $arrImage[ $item->id ] = $item->src;
    }

    if( isset( $Callrequest->variants ) && is_array( $Callrequest->variants ) )
    foreach( $Callrequest->variants as $variant )
    {
      // Get image id
      $image_url = '';
      if( !empty($variant->image_id) ) $image_url = $arrImage[$variant->image_id];
      if( $image_url == '' && isset( $Callrequest->image->src ))
      {
        $image_url = $Callrequest->image->src;
      }

      // Remove the existing Callrequest
      if( in_array( $variant->id, $this->_arrCallrequestKey ))
      {
        return;
      }

      // Add the new variant
      $newCallrequestInfo = array(
        'title' => $Callrequest->title,
        'Callrequest_id' => $Callrequest->id,
        'variant_id' => $variant->id,
        'sku' => $variant->sku,
        'handle' => $Callrequest->handle,
        'price' => $variant->price,
        'updated_at' => date( $this->config->item('CONST_DATE_FORMAT'), strtotime($variant->updated_at)),
        'image_url' => $image_url,
        'data' => base64_encode( json_encode( $Callrequest ) ),
      );

      parent::add( $newCallrequestInfo );
    }
  }

  // Delete the Callrequest from Callrequest_id
  public function deleteCallrequest( $Callrequest_id )
  {
    $this->db->delete( $this->_tablename, array( 'Callrequest_id' => $Callrequest_id, 'shop' => $this->_shop ) );
    if( $this->db->affected_rows() > 0 )
        return true;
    else
        return false;

  }

  public function getCallrequestFromHandle( $Callrequest_handle )
  {
    $return = '';

    $query = parent::getList( 'handle=\'' . $Callrequest_handle . '\'' );
    if( $query->num_rows() > 0 )
    {
      $result = $query->result();
      $return = json_decode( base64_decode( $result[0]->data ));
    }

    return $return;
  }

  // ********************** //
}
?>
