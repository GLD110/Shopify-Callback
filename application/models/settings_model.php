<?php
class Settings_model extends Master_model
{
    protected $_tablename = 'settings';

    function getSettingsValue( $pk = false )
    {
        $return = array();

        $query = $this->getList();

        foreach( $query->result() as $row )
        {
            // if $pk == true, includes the pk value also ( as array )
            if( !$pk )
                $return[ $row->name ] = $row->value;
            else
                $return[ $row->name ] = array(
                    'pk' => $row->id,
                    'value' => $row->value,
                );
        }

        return $return;
    }

    /**
    * Get the list of account
    *
    * @param mixed $team_id
    */
    public function getList()
    {
        $where = 'shop = \'' . $this->_shop . '\'';

        return parent::getList( $where, 'id ASC' );
    }

    function updateValue(){
        // Check the default user is exist
        $query = $this->getList();

        if( $query->num_rows() == 0 ){
          if($this->input->post('btn_position') != null){
            $value_btn_position = $this->input->post('btn_position');
            $value_btn_width = $this->input->post('button_size_w');
            $btn_text = $this->input->post('button_text');
            $value_btn_fontColor = $this->input->post('font_color');
            $value_btn_bgColor = $this->input->post('bg_color');
            $value_btn_status = $this->input->post('my-checkbox');

            $data = array(
                'value_btn_position'=>$value_btn_position,
                'value_btn_width'=>$value_btn_width,
                'btn_text'=>$btn_text,
                'value_btn_fontColor'=>$value_btn_fontColor,
                'value_btn_bgColor'=>$value_btn_bgColor,
                'value_btn_status'=>$value_btn_status,
                'value_wgt_position'=>'',
                'widget_text'=>'',
                'value_wgt_fontColor'=>'',
                'value_wgt_bgColor'=>'',
                'shop'=>$this->_shop
            );
          }

          if($this->input->post('wgt_position') == !null){
            $value_wgt_position = $this->input->post('wgt_position');
            $widget_text = $this->input->post('wgt_text');
            $value_wgt_fontColor = $this->input->post('font_color');
            $value_wgt_bgColor = $this->input->post('bg_color');

            $data = array(
                'value_btn_position'=>'',
                'value_btn_width'=>'',
                'btn_text'=>'',
                'value_btn_fontColor'=>'',
                'value_btn_bgColor'=>'',
                'value_btn_status'=>'',
                'value_wgt_position'=>$value_wgt_position,
                'widget_text'=>$widget_text,
                'value_wgt_fontColor'=>$value_wgt_fontColor,
                'value_wgt_bgColor'=>$value_wgt_bgColor,
                'shop'=>$this->_shop
            );
          }

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

          if($this->input->post('btn_position') != null){
            $value_btn_position = $this->input->post('btn_position');
            $value_btn_width = $this->input->post('button_size_w');
            $btn_text = $this->input->post('button_text');
            $value_btn_fontColor = $this->input->post('font_color');
            $value_btn_bgColor = $this->input->post('bg_color');
            $value_btn_status = $this->input->post('my-checkbox');

            $data = array(
                'value_btn_position'=>$value_btn_position,
                'value_btn_width'=>$value_btn_width,
                'btn_text'=>$btn_text,
                'value_btn_fontColor'=>$value_btn_fontColor,
                'value_btn_bgColor'=>$value_btn_bgColor,
                'value_btn_status'=>$value_btn_status,
            );
          }

          if($this->input->post('wgt_position') != null){
            $value_wgt_position = $this->input->post('wgt_position');
            $widget_text = $this->input->post('wgt_text');
            $value_wgt_fontColor = $this->input->post('font_color');
            $value_wgt_bgColor = $this->input->post('bg_color');

            $data = array(
                'value_wgt_position'=>$value_wgt_position,
                'widget_text'=>$widget_text,
                'value_wgt_fontColor'=>$value_wgt_fontColor,
                'value_wgt_bgColor'=>$value_wgt_bgColor
            );
          }

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

    function install()
    {
        // Check the default user is exist
        $query = parent::getList();

        if( $query->num_rows() == 0 )
        {
          $data = array(
              'value_btn_position'=>'right',
              'value_btn_width'=>'158.25',
              'btn_text'=>'Call Me Back',
              'value_btn_fontColor'=>'#ffffff',
              'value_btn_bgColor'=>'#f89a14',
              'value_btn_status'=>'on',
              'value_wgt_position'=>'right',
              'widget_text'=>'Please fill up the form below',
              'value_wgt_fontColor'=>'#000000',
              'value_wgt_bgColor'=>'#ffffff',
              'value_wgt_timezone'=>'global',
              'shop'=>$this->_shop
          );
            parent::add($data);
        }
    }
}
?>
