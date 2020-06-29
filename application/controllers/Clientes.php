<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clientes extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('clientes_model');
	}

	public function index()
	{
		if ($this->input->post()) {
			$cliente = [
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'perfil' => $this->input->post('perfil'),
			];
			$email = $this->clientes_model->email_ja_cadastrado($cliente['email']);
			if ($email == true) {
				$mensagens = 'Email ja cadastrado';
			} else {
				$id = $this->clientes_model->cadastrar($cliente);
				if ($id > 0) {
					redirect('clientes');
				}
			}
		}
		$dados = [
			'clientes' => $this->clientes_model->obter_clientes(),
			'mensagens' => isset($mensagens) ? $mensagens : null
		];
		$this->load->view('clientes', $dados);
	}
}
