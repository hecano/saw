<?php
class Spk_model extends CI_Model{

  public function __construct(){
     $this->load->database();
  }

  public function get_tabell(){
      $query = $this->db->get('data');
      return $query->result_array();
  }

  public function min_harga(){
     $this->db->select_min('harga');
     $query = $this->db->get('data');
     if($query->num_rows()>0)
     {
       return $query->row()->harga;
     }
     else
     {
       return 0;
     }
  }

  public function max_ram(){
     $this->db->select_max('ram');
     $query = $this->db->get('data');
     if($query->num_rows()>0)
     {
       return $query->row()->ram;
     }
     else
     {
       return 0;
     }
  }

  public function max_memori(){
     $this->db->select_max('memori');
     $query = $this->db->get('data');
     if($query->num_rows()>0)
     {
       return $query->row()->memori;
     }
     else
     {
       return 0;
     }
  }

  public function max_processor(){
     $this->db->select_max('processor');
     $query = $this->db->get('data');
     if($query->num_rows()>0)
     {
       return $query->row()->processor;
     }
     else
     {
       return 0;
     }
  }

  public function max_kamera(){
     $this->db->select_max('kamera');
     $query = $this->db->get('data');
     if($query->num_rows()>0)
     {
       return $query->row()->kamera;
     }
     else
     {
       return 0;
     }
  }

  public function set_data(){
    $data = array(
      'nama'=> $this->input->post('nama'),
      'harga'=> $this->input->post('harga'),
      'ram'=> $this->input->post('ram'),
      'memori'=> $this->input->post('memori'),
      'processor'=> $this->input->post('processor'),
      'kamera'=> $this->input->post('kamera'),
    );

    return $this->db->insert('data', $data);
  }

  public function get_data_id($id=FALSE){
      $query = $this->db->get_where('data', array('id'=>$id));
      return $query->row_array();
  }

  public function update_data($id){
    $data = array(
      'nama'=> $this->input->post('nama'),
      'harga'=> $this->input->post('harga'),
      'ram'=> $this->input->post('ram'),
      'memori'=> $this->input->post('memori'),
      'processor'=> $this->input->post('processor'),
      'kamera'=> $this->input->post('kamera'),
    );

    $this->db->where('id', $id);
    return $this->db->update('data', $data);
  }
  public function delete_data($id){
    return $this->db->delete('data', array('id'=>$id));
  }

}
 ?>
