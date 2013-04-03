<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Contacto extends CI_Controller
{ 
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['titulo']='Contactame';
		$data['contenido']='contacto_view';
		$this->load->view('includes/template',$data);
        
	}


	public function enviar()
	{
	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean|max_length[20]');
		$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|max_length[70]|valid_email');
		$this->form_validation->set_rules('comentario', 'Comentario', 'required|xss_clean');
		
		$this->form_validation->set_message('required', 'Campo %s requerido');
		$this->form_validation->set_message('valid_email', 'Debe ingresar un email valido');

		if ($this->form_validation->run() == FALSE)
		{
			
			
			$data['titulo']='Contactame';
			$data['contenido']='contacto_view';
			$this->load->view('includes/template',$data);
			
			


		}
		else
		{
			/*
			$this->load->library('email');


			$para= $this->input->post('email');
			$comentario= $this->input->post('comentario');
 
 			$config['mailtype'] = "html";

			$this->email->initialize($config);
			$this->email->set_newline("\r\n");

			$this->email->from('nolc_erne@hotmail.com', 'Ernesto');
			$this->email->to($para); 

			$this->email->subject('Mensaje Web Personal');
			$this->email->message($comentario);	

			$this->email->send();
			echo $this->email->print_debugger();
			//redirect('ernesto','refresh');*/





//Recupero los datoss enviados desde el formulario.

$nom=$this->input->post('nombre');
$correo=$this->input->post('email');
$mensaje=$this->input->post('comentario');
//**************************************************************
//envío el correo
$mi_mail="nolc_erne@hotmail.com";
$remitente="Ernesto<nolc_erne@hotmail.com>";
$asunto="Comentario Pagina Personal"; //Asunto 
$cuerpo="
<html> 
<body> 
<table> 
<tr bgcolor='#f0f0f0'><td>
<font size='2' face='Verdana'>
Nombre:&nbsp;".$nom."<br>
<br>Correo:&nbsp;".$correo."<br>Mensaje:&nbsp;".$mensaje."
</font> 
</td>
</tr>
</table>
</body> 
</html>
"; //mensaje
$sheader="From:".$remitente."\nReply-To:".$remitente."\n"; 
$sheader=$sheader."X-Mailer:PHP/".phpversion()."\n"; 
$sheader=$sheader."Mime-Version: 1.0\n"; 
$sheader=$sheader."Content-Type: text/html";
mail($mi_mail,$asunto,$cuerpo,$sheader);


			$data['titulo']='Mensaje Enviado';
			$data['contenido']='msjenviado_view';
			$this->load->view('includes/template',$data);
			




		}

	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/contacto.php */