<?php
class Integration_model extends Master_model
{
  protected $_tablename = 'integration_email';

  /**
  * Get the list of account
  *
  * @param mixed $team_id
  */
  public function getEmails()
  {
      $where = 'shop = \'' . $this->_shop . '\'';

      return parent::getList( $where, 'id ASC' );
  }

  function saveEmails($data){
      // Check the default user is exist
      $query = $this->getEmails();

      if( $query->num_rows() == 0 ){

        $data = array(
            'generalEmail'=>$data['row-general-email'],
            'coporateEmail'=>$data['row-coporate-email'],
            'salesEmail'=>$data['row-sales-email'],
            'orderEmail'=>$data['row-order-email'],
            'complaintEmail'=>$data['row-complaint-email'],
            'otherEmail'=>$data['row-other-email'],
            'shop'=>$this->_shop
          );

        $this->db->insert( $this->_tablename, $data);
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return FALSE;
        }
      }
      else {
        $temp = $query->result();
        $id = $temp[0]->id;

        $data = array(
            'generalEmail'=>$data['row-general-email'],
            'coporateEmail'=>$data['row-coporate-email'],
            'salesEmail'=>$data['row-sales-email'],
            'orderEmail'=>$data['row-order-email'],
            'complaintEmail'=>$data['row-complaint-email'],
            'otherEmail'=>$data['row-other-email'],
          );

        $this->db->where('id', $id);
        $this->db->update( $this->_tablename, $data);
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return FALSE;
        }
      }
  }
}
?>
