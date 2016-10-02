<?php
class Stud_controller extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
	}
	public function index(){

		$this->load->helper('form');
		$data['title'] = 'Formulaire de contact';
		$this->load->view('template/header', $data);
		$this->load->view('Demande_view');
		$this->load->view('template/footer');
	}

//creation d'une demande
	public function creer_demande(){
		$this->load->model('Demande_Model');
		$this->load->library('email');
		
			$data = array(
				'sujet' => $this->input->post('sujet'),
				'email' => $this->input->post('email'),
				'description' => $this->input->post('description')
		);
			$this->Demande_Model->ajouter_demande($data);
			
		$this->send_mail();	

	}

	public function send_mail()
	{
		$from_email = "qantarzouhair@.com";
		$to_email = "contact@esmart-agency.com";
		
		//telechargement email library
		$this->load->library('email');
		$this->email->from($from_email, 'qantar zouhair');
		$this->email->to($to_email);
		$this->email->subject('Email Test');
		$this->email->message('email de confirmation');
		
		//envoie du message 
		if($this->email->send())
			$this->session->set_flashdata("email_sent","Demande est envoyée avec succé.");
		else
			$this->session->set_flashdata("email_sent","Error lors de l'envoie de la demande.");
		$this->load->view('template/header', $data);
		$this->load->view('Demande_view');
		$this->load->view('template/footer');
	}
}

?>
