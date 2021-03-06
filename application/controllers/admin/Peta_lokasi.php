<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peta_lokasi extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		if ($this->session->userdata("id_user") == NULL) 
		{
			redirect('admin/Welcome');
		}
		// $this->load->view('component/v_dashboard');

	}
	public function index()
	{
		$id_user = $this->session->userdata('id_user');	
		$this->load->view('admin/template/header_admin');
		$data['data_user']			= $this->Admin_model->get_dataById($id_user);
		$data['data_lokasi'] 		= $this->Admin_model->tampil_data_lokasi()->result_array();
		$this->load->view('admin/template/navigation_admin', $data);
		$this->load->view('admin/peta_lokasi', $data);
		$this->load->view('admin/template/footer_admin');
		
	}

	function update_lokasi()
	{
		$longitude		= $this->input->post('longitude');
		$latitude		= $this->input->post('latitude');
		$height			= $this->input->post('height');
		// $data = array(
		// 	'longitude'		=> $this->input->post('longitude'),
		// 	'latitude' 		=> $this->input->post('latitude'),
		// 	'ketinggian' 	=> $this->input->post('height'),
		// );
		
		$cek_perubahan = $this->db->query("SELECT * FROM tb_lokasi WHERE id_lokasi = 1 ")->result_array();
		foreach($cek_perubahan as $cek_berubah);
		if	(
				$cek_berubah['longitude'] 			== $longitude && 
				$cek_berubah['latitude'] 			== $latitude && 
				$cek_berubah['ketinggian'] 			== $height 
			)
		{
			$this->session->set_flashdata('success', 
			'<script>
				Swal.fire({
					position:	"top-center-start",
					icon: "info",
					title: "Data tidak ada yang dirubah",
					showConfirmButton: false,
					timer: 2000,
					confirmButtonClass: "btn btn-primary",
					buttonsStyling: false,
				})
			</script>');
		}
		else
		{
			$data = array(
				'longitude'		=> $longitude,
				'latitude' 		=> $latitude,
				'ketinggian' 	=> $height,
			);
			$this->Admin_model->update_table('tb_lokasi', $data, array('id_lokasi' => 1));
			$this->session->set_flashdata('success', 
			'<script>
				Swal.fire({
					position:	"top-center-start",
					icon: "success",
					title: "Data Berhasil Dirubah",
					showConfirmButton: false,
					timer: 2000,
					confirmButtonClass: "btn btn-primary",
					buttonsStyling: false,
				})
			</script>');
		}
		redirect('admin/Peta_lokasi');
	}
}
