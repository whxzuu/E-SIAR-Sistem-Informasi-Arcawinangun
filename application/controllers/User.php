<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Desa Nagrak';
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();

		$this->load->view('dashboard', $data);
	}

	public function message()
	{
		$nama = htmlspecialchars($this->input->post('nama'));
		$email = htmlspecialchars($this->input->post('email'));
		$no_tlp = htmlspecialchars($this->input->post('no_telepon'));
		$pesan = htmlspecialchars($this->input->post('pesan'));

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'no_telepon' => $no_tlp,
			'pesan' => $pesan
		);

		$this->db->insert('message', $data);
		redirect('user');
	}

}