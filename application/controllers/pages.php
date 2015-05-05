<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Page');
	}

	public function index()
	{
		$array['users'] = $this->Page->get_all();
		$this->load->view('main', $array);
	}

	public function get_all($num)
	{
		$array['all'] = $this->Page->get_all();
		$array['users'] = $this->Page->get_limit($num);
		$this->load->view('partials/results', $array);
	}

	public function get_results($num, $name)
	{
		$array['all'] = $this->Page->get_results($num, $name);
		$array['users'] = $this->Page->get_results_limit($num, $name);
		$this->load->view('partials/results', $array);
	}

	public function name_search($name, $num)
	{
		$array['all'] = $this->Page->all_name_search($name, $num);
		$array['users'] = $this->Page->name_search($name, $num);
		$this->load->view('partials/results', $array);
	}




}