<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Home_m');
		$this->load->library('session');
	}

	public function index()
	{

		$send = $this->Home_m->curl("http://178.128.23.9:5952/api/List");
		$data = json_decode($send, TRUE);
		$this->load->view('home',$data);
	}

	// public function tes()
	// {

	// 	$send = $this->Home_m->curl("http://178.128.23.9:5952/api/List/2");
	// 	$data = json_decode($send, TRUE);
		
	// 	echo "<pre>";
	// 	print_r($data);
	// 	echo "</pre>";
	// }

	public function hapus_archived_listData()
	{
		$id = $this->input->post('id');
		$string = "http://178.128.23.9:5952/api/List/Delete/" ;
		$delete = $string.$id ;

		$send = $this->Home_m->curl_delete($delete);
		$data = json_decode($send, TRUE);
		
		echo $this->session->set_flashdata('message', ' 
				<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    Data Berhasil Dihapus !
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
    	redirect(base_url("home?page=master_list"));	
	}

	public function tambah_itemList()
	{
		$name_listItem = $this->input->post('name_listItem');
		$descListItem = $this->input->post('descListItem');
		$isDoneListItem = $this->input->post('isDoneListItem');
		$listIdList = $this->input->post('listIdList');

		echo $this->session->set_flashdata('message', ' 
				<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    Data Berhasil Ditambahkan !
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
    	redirect(base_url("home?page=master_item"));
	}

	public function tambah_list_data()
	{
		$name_list = $this->input->post('name_list');
		$color_Hexalist = $this->input->post('color_Hexalist');

		$data = array(
			"nameList" => $nameList,
			"colorHexList" => $color_Hexalist,
		);

		$send = $this->Home_m->curl_post("http://178.128.23.9:5952/api/List",json_encode($data));


		echo $this->session->set_flashdata('message', ' 
				<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    Data Berhasil Ditambahkan !
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
    	redirect(base_url("home?page=master_list"));
	}

	// public function

	public function edit_dataList()
	{
		$id = $this->input->post('id_list'); 
		$name_list = $this->input->post('nama_list');
		$color_Hexalist = $this->input->post('color_hexalist');
		
		echo $this->session->set_flashdata('message', ' 
				<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    Data Berhasil Ditambahkan !
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
    	redirect(base_url("home?page=master_list"));	
	}
}
