<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('spk_model');
    $this->load->helper('url_helper');
  }

	public function index()
	{
    $data['min_harga'] = $this->spk_model->min_harga();
    $data['max_ram'] = $this->spk_model->max_ram();
    $data['max_memori'] = $this->spk_model->max_memori();
    $data['max_processor'] = $this->spk_model->max_processor();
    $data['max_kamera'] = $this->spk_model->max_kamera();
    $data['tabel'] = $this->spk_model->get_tabell();

    $this->load->view('Spk/header');
		$this->load->view('Spk/Index', $data);
    $this->load->view('Spk/footer');
	}

  public function create(){
    $this->load->view('Spk/header');
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama','nama','required');
    $this->form_validation->set_rules('harga','harga','required');
    $this->form_validation->set_rules('ram','ram','required');
    $this->form_validation->set_rules('memori','memori','required');
    $this->form_validation->set_rules('processor','processor','required');
    $this->form_validation->set_rules('kamera','kamera','required');

    if($this->form_validation->run() === FALSE){
    $this->load->view('Spk/create');
    }else{
    $this->spk_model->set_data();
    redirect('Spk');
      }
    $this->load->view('Spk/footer');
  }

  public function data()
  {
    $data['tabel'] = $this->spk_model->get_tabell();

    $this->load->view('Spk/header');
    $this->load->view('Spk/data', $data);
    $this->load->view('Spk/footer');
  }

  public function update($id){
    $this->load->view('Spk/header');
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama','nama','required');
    $this->form_validation->set_rules('harga','harga','required');
    $this->form_validation->set_rules('ram','ram','required');
    $this->form_validation->set_rules('memori','memori','required');
    $this->form_validation->set_rules('processor','processor','required');
    $this->form_validation->set_rules('kamera','kamera','required');

    if($this->form_validation->run() === FALSE){
      $data['data_item'] = $this->spk_model->get_data_id($id);
      $this->load->view('Spk/update', $data);
    }else{
      $this->spk_model->update_data($id);
      redirect('data');
      }
  }

  public function delete($id){
    $this->spk_model->delete_data($id);
    redirect('data');
  }
}
