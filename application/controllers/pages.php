<?php

class Pages extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		session_start();
	}

	public function index()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|min_length[5]');
		$this->form_validation->set_rules('password','Password','required|min_length[4]');
		
		if($this->form_validation->run()!==false){
		
		$this->load->model('login_model');
		//$this->login_model->verify_user('login','pass');
		$res = $this->login_model->verify_user($this->input->post('username'),$this->input->post('password'));
	
		if ($res !== false){
		
		$_SESSION['user1'] = $this->input->post('username');
		redirect('link');
		}
		}		
		$this->load->view("input");
		
	}
	public function hello()
	{
		$data['title']="hi";
		$data['a1']="2";
		$data['a2']="3";
		$this->load->model("mathe");
		$data['add1']=$this->mathe->add($data['a1'],$data['a2']);
		$this->load->view("call_page1",$data);
	}
	public function mathadd()
	{
	$this->load->model("mathe");
	echo $this->mathe->add(2,3);
	}
	public function link()
	{
	$data['title']="hey";
	$this->load->view("linker",$data);
	}
	public function database_values()
	{
	$this->load->model("call_page11");
	$data['results'] = $this->call_page11->getall();
	$this->load->view("call_page",$data);
	}
	public function insert()
	{
	
	$this->load->model("call_page11");
	$array1 = array (
	"username"=>"login2",
	"password"=>"pass2",
	"id" => "2"
	);
	
	$this->call_page11->insertall($array1);
	}
	public function insert2()
	{
		$this->load->view("insert_page");
	}	
	public function insert1()
	{
	$this->load->model("call_page11");
	$array1 = array (array (
	"username"=>"login3",
	"password"=>"pass2",
	"id" => "2"
	),
	array (
	"username"=>"login4",
	"password"=>"pass2",
	"id" => "2"
	)
	);
	$this->call_page11->insert1($array1);
	}
	public function update()
	{
	$this->load->model("call_page11");
	$array1 = array (
	"username"=>"login5"
	);
	$this->call_page11->update1($array1);
	}
	public function delete()
	{
	$this->load->model("call_page11");
	$array1 = array (
	"id"=>"2",
	"username"=>"login2"
	);
	$this->call_page11->delete1($array1);
	}
	
}
?>