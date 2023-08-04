<?php
class Admin_model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url', 'file'));
	}

	public function total_user()
	{
		return $this->db->query("select * from users order by id  DESC")->num_rows();
	}

	// public function getsuku($limit, $start, $keyword)
	// {

	// 	$sql = $this->db->query("select * from suku where nama_suku like '%" . $keyword . "%' limit " . $limit . ", " . $start . "");
	// 	return $sql;
	// }
	// public function insert_suku()
	// {
	// 	$data_suku = array(
	// 		'nama_suku' => $this->input->post('nama_suku'),
	// 	);

	// 	$this->db->insert('suku', $data_suku);
	// }

	// public function hapus_suku($id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('suku');
	// }

	// public function edit_suku($id)
	// {
	// 	$sql = $this->db->query("select * from suku where id = '" . $id . "'");
	// 	$data = $sql->result_array();
	// 	return $data;
	// }

	// public function proses_edit_suku()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama_suku = $this->input->post('nama_suku');
	// 	$data = array(
	// 		'nama_suku' => $nama_suku
	// 	);
	// 	$this->db->where('id', $id);
	// 	$this->db->update('suku', $data);

	// }

	// public function getpengelola($limit, $start, $keyword)
	// {

	// 	$sql = $this->db->query("select * from user where status = 'surveyor'  AND username
	// 	like '%" . $keyword . "%'  limit " . $limit . ", " . $start . "
	// 	");
	// 	return $sql;
	// }

	// public function insert_pengelola()
	// {
	// 	$data_pengelola = array(
	// 		'username' => $this->input->post('nama_pengelola'),
	// 		'email' => $this->input->post('email'),
	// 		'password' => md5($this->input->post('password'))
	// 	);

	// 	$this->db->insert('user', $data_pengelola);
	// }

	// public function hapus_pengelola($id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('user');
	// }

	// public function edit_pengelola($id)
	// {
	// 	$sql = $this->db->query("select * from user where id = '" . $id . "'");
	// 	$data = $sql->result_array();
	// 	return $data;
	// }

	// public function proses_edit_pengelola()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama = $this->input->post('nama');
	// 	$data = array(
	// 		'username' => $nama,
	// 		'password' =>  md5($this->input->post('password')),
	// 		'email' =>  $this->input->post('email')
	// 	);
	// 	$this->db->where('id', $id);
	// 	$this->db->update('user', $data);

	// }

	// public function getagama($limit, $start, $keyword)
	// {

	// 	$sql = $this->db->query("select * from agama where nama_agama like '%" . $keyword . "%' limit " . $limit . ", " . $start . "");
	// 	return $sql;
	// }
	// public function insert_agama()
	// {
	// 	$data_agama = array(
	// 		'nama_agama' => $this->input->post('nama_agama'),
	// 	);

	// 	$this->db->insert('agama', $data_agama);
	// }

	// public function hapus_agama($id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('agama');
	// }

	// public function edit_agama($id)
	// {
	// 	$sql = $this->db->query("select * from agama where id = '" . $id . "'");
	// 	$data = $sql->result_array();
	// 	return $data;
	// }

	// public function proses_edit_agama()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama_agama = $this->input->post('nama_agama');
	// 	$data = array(
	// 		'nama_agama' => $nama_agama
	// 	);
	// 	$this->db->where('id', $id);
	// 	$this->db->update('agama', $data);

	// }

	// public function getprovinsi($limit, $start, $keyword)
	// {

	// 	$sql = $this->db->query("select * from provinsi where nama_provinsi like '%" . $keyword . "%' limit " . $limit . ", " . $start . "");
	// 	return $sql;
	// }

	// public function insert_provinsi()
	// {
	// 	$data_provinsi = array(
	// 		'nama_provinsi' => $this->input->post('nama_provinsi')
	// 	);

	// 	$this->db->insert('provinsi', $data_provinsi);
	// }

	// public function edit_provinsi($id)
	// {
	// 	$sql = $this->db->query("select * from provinsi where id = '" . $id . "'");
	// 	$data = $sql->result_array();
	// 	return $data;
	// }

	// public function proses_edit_provinsi()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama_provinsi = $this->input->post('nama_provinsi');
	// 	$data = array(
	// 		'nama_provinsi' => $nama_provinsi
	// 	);
	// 	$this->db->where('id', $id);
	// 	$this->db->update('provinsi', $data);

	// }

	// public function hapus_provinsi($id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('provinsi');
	// }

	

	// public function getkota($limit, $start, $keyword)
	// {

	// 	$sql = $this->db->query("select a.*, b.nama_provinsi from kota a INNER JOIN provinsi b on a.id_provinsi = b.id WHERE nama_kota or nama_kota like '%" . $keyword . "%' limit " . $limit . ", " . $start . "");
	// 	return $sql;
	// }

	// public function insert_kota()
	// {
	// 	$data_kota = array(
	// 		'nama_kota' => $this->input->post('nama_kota'),
	// 		'id_provinsi' => $this->input->post('provinsi'),
	// 	);

	// 	$this->db->insert('kota', $data_kota);
	// }

	// public function edit_kota($id)
	// {
	// 	$sql = $this->db->query("select * from kota where id = '" . $id . "'");
	// 	$data = $sql->result_array();
	// 	return $data;
	// }

	// public function proses_edit_kota()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama_kota = $this->input->post('nama_kota');
	// 	$data = array(
	// 		'nama_kota' => $nama_kota,
	// 		'id_provinsi' => $this->input->post('provinsi')
	// 	);
	// 	$this->db->where('id', $id);
	// 	$this->db->update('kota', $data);

	// }

	// public function hapus_kota($id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('kota');
	// }

	// public function getkecamatan($limit, $start, $keyword)
	// {

	// 	$sql = $this->db->query("select a.*, b.nama_kota from kecamatan a INNER JOIN kota b on a.id_kota = b.id WHERE nama_kecamatan OR nama_kecamatan like '%" . $keyword . "%' limit " . $limit . ", " . $start . "");
	// 	return $sql;
	// }

	// public function insert_kecamatan()
	// {
	// 	$data_kecamatan = array(
	// 		'nama_kecamatan' => $this->input->post('nama_kecamatan'),
	// 		'id_kota' => $this->input->post('kota'),
	// 	);

	// 	$this->db->insert('kecamatan', $data_kecamatan);
	// }

	// public function edit_kecamatan($id)
	// {
	// 	$sql = $this->db->query("select * from kecamatan where id = '" . $id . "'");
	// 	$data = $sql->result_array();
	// 	return $data;
	// }

	// public function proses_edit_kecamatan()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama_kecamatan = $this->input->post('nama_kecamatan');
	// 	$id_kota = $this->input->post('kota');
	// 	$data = array(
	// 		'nama_kecamatan' => $nama_kecamatan,
	// 		'id_kota' => $id_kota
	// 	);
	// 	$this->db->where('id', $id);
	// 	$this->db->update('kecamatan', $data);

	// }

	// public function hapus_kecamatan($id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('kecamatan');
	// }

	// public function getkelurahan($limit, $start, $keyword)
	// {

	// 	$sql = $this->db->query("select a.*, b.nama_kecamatan from kelurahan a INNER JOIN kecamatan b on a.id_kecamatan = b.id WHERE nama_kelurahan OR nama_kelurahan like '%" . $keyword . "%' limit " . $limit . ", " . $start . "");
	// 	return $sql;
	// }

	// public function insert_kelurahan()
	// {
	// 	$data_kelurahan = array(
	// 		'nama_kelurahan' => $this->input->post('nama_kelurahan'),
	// 		'id_kecamatan' => $this->input->post('kecamatan'),
	// 	);

	// 	$this->db->insert('kelurahan', $data_kelurahan);
	// }

	// public function edit_kelurahan($id)
	// {
	// 	$sql = $this->db->query("select * from kelurahan where id = '" . $id . "'");
	// 	$data = $sql->result_array();
	// 	return $data;
	// }

	// public function proses_edit_kelurahan()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama_kelurahan = $this->input->post('nama_kelurahan');
	// 	$id_kecamatan = $this->input->post('kecamatan');
	// 	$data = array(
	// 		'nama_kelurahan' => $nama_kelurahan,
	// 		'id_kecamatan' => $id_kecamatan
	// 	);
	// 	$this->db->where('id', $id);
	// 	$this->db->update('kelurahan', $data);

	// }

	// public function hapus_kelurahan($id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('kelurahan');
	// }




	// public function getprovinsiopt()
	// {
	// 	$sql = $this->db->query("select * from provinsi");
	// 	return $sql;	
	// }

	// public function getkotaopt()
	// {
	// 	$sql = $this->db->query("select * from kota");
	// 	return $sql;	
	// }
	// public function getkecamatanopt()
	// {
	// 	$sql = $this->db->query("select * from kecamatan");
	// 	return $sql;	
	// }

	// public function insert_admin()
	// {
	// 	if ($this->input->post('status') == 1) {
	// 		$a = 'admin';
	// 	} elseif ($this->input->post('status') == 2) {
	// 		$a = 'owner';
	// 	} elseif ($this->input->post('status') == 3) {
	// 		$a = 'asisten';
	// 	}

	// 	$data_admin = array(
	// 		'username' => $this->input->post('nama'),
	// 		'email' => $this->input->post('email'),
	// 		'password' => md5($this->input->post('password')),
	// 		'descstatus' => $a,
	// 		'status' => $this->input->post('status'),
	// 		'active' => 1
	// 	);

	// 	$this->db->insert('user', $data_admin);
	// }

	// public function hapusadmin($id)
	// {
	// 	$this->db->where('id_user', $id);
	// 	$this->db->delete('user');
	// }
	// public function hapuslampiran($id)
	// {
	// 	$this->db->where('id_lampiran', $id);
	// 	$this->db->delete('lampiran');
	// }

	// public function getjeniskasus($limit, $start, $keyword)
	// {

	// 	$sql = $this->db->query("select * from jeniskasus where kode like '%" . $keyword . "%' limit " . $limit . ", " . $start . "");
	// 	return $sql;
	// }

	// public function tambahjeniskasus()
	// {
	// 	$kode = $this->input->post('kode');
	// 	$jenis = $this->input->post('jeniskasus');

	// 	$data_terimakasus = array(
	// 		'kode' => $kode, 'kasus' => $jenis
	// 	);
	// 	$this->db->insert('jeniskasus', $data_terimakasus);
	// }



	// public function hapusjeniskasus($id)
	// {
	// 	$this->db->where('id_jkasus', $id);
	// 	$this->db->delete('jeniskasus');
	// }


	// public function editjeniskasus($id)
	// {
	// 	$sql = $this->db->query("select * from jeniskasus where id_jkasus = '" . $id . "'");
	// 	$data = $sql->result_array();
	// 	return $data;
	// }

	// public function prosesedit_jeniskasus()
	// {
	// 	$id = $this->input->post('id_jkasus');
	// 	$kode = $this->input->post('kode');
	// 	$kasus = $this->input->post('kasus');

	// 	$data = array(
	// 		'kode' => $kode, 'kasus' => $kasus
	// 	);
	// 	$this->db->where('id_jkasus', $id);
	// 	$this->db->update('jeniskasus', $data);
	// }

	// public function datajeniskasus()
	// {

	// 	$sql = $this->db->query("select * from jeniskasus ")->result_array();
	// 	return $sql;
	// }


	// public function insert_inputkasus()
	// {
	// 	// set_time_limit(0);
	// 	// ini_set('memory_limit', '-1');
	// 	// $config['upload_path'] = realpath(APPPATH.'../assets/upload/kasus/');
	// 	// $config['allowed_types'] = 'pdf|PDF';
	// 	// $config['remove_spaces'] = true;

	// 	//     $lampiran = "";
	// 	//     $this->load->library('upload', $config);


	// 	// 	if (!$this->upload->do_upload('lampiran')) {
	// 	// 		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Kasus gagal disimpan !</div></div>');
	// 	// 		redirect('auth/inputkasus');
	// 	// 	} else {
	// 	// 		$lampiran = $this->upload->data();
	// 	// 		$lampiran = $lampiran['file_name'];
	// 	// 	}


	// 	$data = [];

	// 	$count = count($_FILES['lampiran']['name']);
	// 	for ($i = 0; $i < $count; $i++) {

	// 		if (!empty($_FILES['lampiran']['name'][$i])) {

	// 			$_FILES['file']['name'] = $_FILES['lampiran']['name'][$i];
	// 			$_FILES['file']['type'] = $_FILES['lampiran']['type'][$i];
	// 			$_FILES['file']['tmp_name'] = $_FILES['lampiran']['tmp_name'][$i];
	// 			$_FILES['file']['error'] = $_FILES['lampiran']['error'][$i];
	// 			$_FILES['file']['size'] = $_FILES['lampiran']['size'][$i];

	// 			$config['upload_path'] = realpath(APPPATH . '../assets/upload/kasus/');
	// 			$config['allowed_types'] = 'pdf|PDF';
	// 			$config['max_size'] = '5000';

	// 			$this->load->library('upload', $config);

	// 			if ($this->upload->do_upload('file')) {
	// 				$uploadData = $this->upload->data();
	// 				$filename = $uploadData['file_name'];

	// 				$data['totalFiles'][] = $filename;
	// 			} else {
	// 				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Kasus gagal disimpan !</div></div>');
	// 				redirect('auth/inputkasus');
	// 			}
	// 		}
	// 	}

	// 	$jeniskasus = $this->input->post('jeniskasus');
	// 	$jk = explode("/", $jeniskasus);

	// 	$admin = $this->input->post('biaya_administrasi');
	// 	$admin = str_ireplace(',', '', $admin);
	// 	$b_admin = (int)$admin;

	// 	$sidang = $this->input->post('biaya_sidang');
	// 	$sidang = str_ireplace(',', '', $sidang);
	// 	$b_sidang = (int)$sidang;

	// 	$tduga = $this->input->post('biaya_tduga');
	// 	$tduga = str_ireplace(',', '', $tduga);
	// 	$b_tduga = (int)$tduga;

	// 	$data_inputkasus = array(
	// 		'nama_bawahan' => $this->session->userdata('username'), 'id_user' => $this->session->userdata('id_user'), 'id_jkasus' => $jk[0], 'kode' => $jk[1], 'jeniskasus' => $jk[2], 'biaya_admin' => $b_admin, 'biaya_sidang' => $b_sidang, 'biaya_tduga' => $b_tduga, 'status' => 0, 'tanggal' => date('Y-m-d H:i:s')
	// 	);
	// 	$id = $this->add_kasus('kasus', $data_inputkasus);

	// 	for ($i = 0; $i < count($data['totalFiles']); $i++) {
	// 		$this->add_kasus('lampiran', [
	// 			'id_kasus' => $id, 'lampiran' => $data['totalFiles'][$i], 'tanggal' => date('Y-m-d H:i:s')
	// 		]);
	// 	}
	// }

	// function add_kasus($table, $post_data)
	// {

	// 	$this->db->trans_start();
	// 	$this->db->insert($table, $post_data);
	// 	$insert_id = $this->db->insert_id();
	// 	$this->db->trans_complete();
	// 	return  $insert_id;
	// }




	// public function getkasus($limit, $start, $keyword)
	// {
	// 	if ($this->session->userdata('status') == '3') {
	// 		$param = $this->session->userdata('id_user');
	// 		$sql = $this->db->query("select * from kasus where kode like '%" . $keyword . "%' and id_user = '" . $param . "' limit " . $limit . ", " . $start . "")->result_array();
	// 	} else {
	// 		$sql = $this->db->query("select * from kasus where kode like '%" . $keyword . "%' OR nama_bawahan like '%" . $keyword . "%'  limit " . $limit . ", " . $start . "")->result_array();
	// 	}

	// 	for ($i = 0; $i < count($sql); $i++) {
	// 		$sangar = "SELECT * FROM lampiran WHERE id_kasus = {$sql[$i]['id_kasus']} ";
	// 		$a = $this->db->query($sangar)->result_array();
	// 		$sql[$i]['lampiran'] = $a;
	// 	}
	// 	return $sql;
	// }


	// public function editkasus($id)
	// {
	// 	$sql = $this->db->query("select * from kasus where id_kasus = '" . $id . "'");
	// 	$data = $sql->result_array();
	// 	for ($i = 0; $i < count($data); $i++) {
	// 		$sangar = "SELECT * FROM lampiran WHERE id_kasus = {$data[$i]['id_kasus']} ";
	// 		$a = $this->db->query($sangar)->result_array();
			
	// 		$data[$i]['lampiran'] = $a;
	// 	}
	// 	return $data;
	// }


	// public function proseseditkasus()
	// {
	// 	$id = $this->input->post('id_kasus');
	// 	// set_time_limit(0);
	// 	// ini_set('memory_limit', '-1');
	// 	// $config['upload_path'] = realpath(APPPATH . '../assets/upload/kasus/');
	// 	// $config['allowed_types'] = 'pdf|PDF';
	// 	// $config['remove_spaces'] = true;

	// 	// $lampiran = "";
	// 	// $this->load->library('upload', $config);
	// 	// if (!$this->upload->do_upload('lampiran')) {
	// 	// 	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Kasus gagal disimpan !</div></div>');
	// 	// 	redirect('auth/laporan');
	// 	// } else {
	// 	// 	$lampiran = $this->upload->data();
	// 	// 	$lampiran = $lampiran['file_name'];
	// 	// }

	// 	$data = [];

	// 	$count = count($_FILES['lampiran']['name']);
	// 	for ($i = 0; $i < $count; $i++) {

	// 		if (!empty($_FILES['lampiran']['name'][$i])) {

	// 			$_FILES['file']['name'] = $_FILES['lampiran']['name'][$i];
	// 			$_FILES['file']['type'] = $_FILES['lampiran']['type'][$i];
	// 			$_FILES['file']['tmp_name'] = $_FILES['lampiran']['tmp_name'][$i];
	// 			$_FILES['file']['error'] = $_FILES['lampiran']['error'][$i];
	// 			$_FILES['file']['size'] = $_FILES['lampiran']['size'][$i];

	// 			$config['upload_path'] = realpath(APPPATH . '../assets/upload/kasus/');
	// 			$config['allowed_types'] = 'pdf|PDF';
	// 			$config['max_size'] = '5000';

	// 			$this->load->library('upload', $config);

	// 			if ($this->upload->do_upload('file')) {
	// 				$uploadData = $this->upload->data();
	// 				$filename = $uploadData['file_name'];

	// 				$data['totalFiles'][] = $filename;
	// 			} else {
	// 				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Kasus gagal disimpan !</div></div>');
	// 				redirect('auth/laporan');
	// 			}
	// 		}
	// 	}

		

	// 	$admin = $this->input->post('biaya_administrasi');
	// 	$admin = str_ireplace(',', '', $admin);
	// 	$b_admin = (int)$admin;

	// 	$sidang = $this->input->post('biaya_sidang');
	// 	$sidang = str_ireplace(',', '', $sidang);
	// 	$b_sidang = (int)$sidang;

	// 	$tduga = $this->input->post('biaya_tduga');
	// 	$tduga = str_ireplace(',', '', $tduga);
	// 	$b_tduga = (int)$tduga;

	// 	$data_editkasus = array(
	// 		// 'file' => base_url('assets/upload/kasus/' . $this->upload->data('file_name'))
	// 		'biaya_admin' => $b_admin, 'biaya_sidang' => $b_sidang, 'biaya_tduga' => $b_tduga
	// 		, 'status' => 0
	// 		, 'tanggal' => date('Y-m-d H:i:s')
	// 	);
	// 	$this->db->where('id_kasus', $id);
	// 	$this->db->update('kasus', $data_editkasus);

	// 	// $id = $this->edit_post('lampiran', $data_editkasus);
	// 	$id = $this->input->post('id_kasus');
	// 	// var_dump($id); die;
	// 	for ($i = 0; $i < count($data['totalFiles']); $i++) {
	// 		$this->edit_post('lampiran', [
	// 			'id_kasus' => $id, 'lampiran' => $data['totalFiles'][$i], 'tanggal' => date('Y-m-d H:i:s')
	// 		]);
	// 	}
	// }

	// function edit_post($table, $post_data)
	// {

	// 	$this->db->trans_start();
	// 	$this->db->insert($table, $post_data);
	// 	$insert_id = $this->db->insert_id();
	// 	$this->db->trans_complete();
	// 	return  $insert_id;
	// }


	// public function terimakasus()
	// {
	// 	$id = $this->input->post('id_kasus');
	// 	$komentar = $this->input->post('komentar');

	// 	$data_terimakasus = array(
	// 		'status' => 1, 'deskripsi' => $komentar, 'tanggal' => date('Y-m-d H:i:s')
	// 	);
	// 	$this->db->where('id_kasus', $id);
	// 	$this->db->update('kasus', $data_terimakasus);
	// }



	// public function tolakkasus()
	// {
	// 	$id = $this->input->post('id_kasus');
	// 	$komentar = $this->input->post('komentar');

	// 	$data_terimakasus = array(
	// 		'status' => 2, 'deskripsi' => $komentar, 'tanggal' => date('Y-m-d H:i:s')
	// 	);
	// 	$this->db->where('id_kasus', $id);
	// 	$this->db->update('kasus', $data_terimakasus);
	// }
}
