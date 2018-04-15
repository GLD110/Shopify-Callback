<?php
class Callrequest_model extends Master_model
{
  protected $_tablename = 'callrequest';
  private $_total_count = 0;
  private $_arrCallrequestKey = array();

  function __construct() {
    parent::__construct();
  }

  /**
  * Get the list of Callrequest
  */
  public function getList()
  {
      $where = 'shop = \'' . $this->_shop . '\'';

      return parent::getList( $where, 'id DESC' );
  }

  // Get last updated date
  public function getLastUpdateDate()
  {
      $return = '';

      $this->db->select( 'date' );
      $this->db->order_by( 'date DESC' );
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

  // Add Callrequest to database from Shopify
  public function addCallrequest( $Callrequest )
  {
      $newCallrequestInfo = array(
        'name' => $Callrequest['name'],
        'email' => $Callrequest['email'],
        'phone' => $Callrequest['phone'],
        'call_type' => $Callrequest['call_type'],
        'date' => date("Y") . '-' . $Callrequest['time_month'] . '-' . $Callrequest['time_day'],
        'time' => $Callrequest['time_hour'],
        'timezone' => $Callrequest['time_gmt'],
        'note' => $Callrequest['message'],
        'location' => $Callrequest['location'],
        'status' => 'pending',
        'shop' => $Callrequest['shop']
      );

      parent::add( $newCallrequestInfo );
  }

  // Update the Callrequest from Callrequest_id
  public function updateCallrequest($Callrequest_id, $status)
  {
    $this->db->where('id', $Callrequest_id);
    $this->db->update( $this->_tablename, array( 'status' => $status, 'shop' => $this->_shop ) );
    if( $this->db->affected_rows() > 0 )
        return true;
    else
        return false;

  }

  // ********************** //
}
?>
