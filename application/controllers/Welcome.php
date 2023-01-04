<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->input->post('submit')) {
			$keyword = $this->input->post('keyword');

			$this->session->set_userdata('keyword', $keyword);
		} else {
			$keyword = $this->session->userdata('keyword');
		}

		$config['base_url'] = 'http://localhost/toko_topup/welcome/';
		$config['total_rows'] = $this->model_diamond->countModel($keyword);
		$config['per_page'] = 5;
		$config['num_links'] = 3;


		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['diamond'] = $this->model_diamond->tampil_data_diamond($config['per_page'], $data['start'], $keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}
}
