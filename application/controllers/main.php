<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model("Note");
	}
	public function index()
	{
		$data["notes"]=$this->Note->get_all();
		$this->load->view("index", $data);
	}
	public function index_html()
	{
		$data["notes"]=$this->Note->get_all();
		$this->load->view("index", $data);
	}
	public function create()
	{
		$this->Note->create($this->input->post());
		$data["notes"]=$this->Note->get_all();
		$this->load->view("partials/notes", $data);

	}
	public function update()
	{
		$this->Note->update($this->input->post());
		$data["notes"]=$this->Note->get_all();
		$this->load->view("partials/notes", $data);
	}
	public function delete()
	{
		$this->Note->delete($this->input->post());
		$data["notes"]=$this->Note->get_all();
		$this->load->view("partials/notes", $data);
	}


}
?>
