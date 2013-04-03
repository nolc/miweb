<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Ernesto extends CI_Controller
{ 
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['titulo']='Jose Ernesto Ramirez Moreno';
		$data['contenido']='ernesto_view';
		$this->load->view('includes/template',$data);
        
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/ernesto.php */