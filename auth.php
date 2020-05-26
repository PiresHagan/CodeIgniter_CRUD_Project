<?php
	class auth extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('model_userLog');
		}

		function index(){
			$this->load->view('homepage');
		}

		function login(){
			if(isset($_POST['submit'])){
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$berhasil = $this->model_userLog->login($username, $password);
				if($berhasil == 1){
					$this->session->set_userdata('username', $username);
					redirect('auth/toPosting');
				} else {
					redirect('auth/login');
				}
			} else {
				$this->load->view('form_login');
			}
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('auth/login');
		}

		function toList(){
			$data = array(
			'title'		=> 'Data User',
			'data_user'	=> $this->model_userLog->get_all_user()
			);
			$this->load->view('user',$data);
		}

		function toPosting(){
			$dataPost = array(
            'title'		=> 'Data Posting',
			'data_post'	=> $this->model_userLog->get_all_posting()
			);
			$this->load->view('homepage',$dataPost);
		}

		function read_More($id){
			$this->data['getDataPostEdit'] = $this->model_userLog->getDataPostEdit('posting',$id);
			$this->load->view('detailPost',  $this->data);
		}

		function formAdd(){
			$this->load->view('form_Add');
		}

		function formAddPost(){
			$this->load->view('formAddPost');
		}

		function insertUser(){
			$nim = $_POST["NIM"];
     		$nama = $_POST["NAMA"];
      		$username = $_POST["USERNAME"];
      		$alamat = $_POST["ALAMAT"];
      		$password = $_POST["PASSWORD"];
      		$foto = basename($_FILES['foto']['name']);
      		$target_path = "images/".$foto;
     		$data = array('NIM'=>$nim, 'NAMA'=>$nama, 'USERNAME'=>$username, 'ALAMAT'=>$alamat, 'PASSWORD'=>$password, 'FOTO'=>$foto);
			$tambah = $this->model_userLog->addUser('student',$data);
			if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_path)){
				if($tambah>0){
					redirect('auth/toList');
				} else {
					echo "Gagal disimpan";
				}
			}
		}

		function insertPost(){
			$judul = $_POST['judul_artikel'];
			$isi = $_POST['isi_artikel'];
			date_default_timezone_set('Asia/Jakarta');
			$tgl = date('Y-m-d h:i:s a', time());
			date_default_timezone_set('Asia/Jakarta');
			$tgledit = date('Y-m-d h:i:s a', time());
			$nama = $this->session->userdata('username');
			$namaedit = $this->session->userdata('username');
			$data = array('JUDUL_POST'=>$judul, 'ISI_POST'=>$isi, 'TANGGAL_POST'=>$tgl, 'TANGGAL_EDIT'=>$tgledit, 'NAMA_PEMBUAT'=>$nama, 'NAMA_PENGEDIT'=>$namaedit);
			$tambah = $this->model_userLog->addPost('posting',$data);
				if($tambah>0){
					redirect('auth/toPosting');
				} else {
					echo "Gagal disimpan";
				}
		}

		function formEdit($id){
			$this->data['getDataEdit'] = $this->model_userLog->getDataEdit('student',$id);
			$this->load->view('form_Edit', $this->data);
		}

		function formEditPost($id){
			$this->data['getDataPostEdit'] = $this->model_userLog->getDataPostEdit('posting',$id);
			$this->load->view('form_EditPOst',  $this->data);
		}

		function updateUser($id){
			$nim = $_POST["NIM"];
     		$nama = $_POST["NAMA"];
      		$username = $_POST["USERNAME"];
      		$alamat = $_POST["ALAMAT"];
      		$password = $_POST["PASSWORD"];
			$foto = basename($_FILES['foto']['name']);
      		$target_path = "images/".$foto;
     		$data = array('NIM'=>$nim, 'NAMA'=>$nama, 'USERNAME'=>$username, 'ALAMAT'=>$alamat, 'PASSWORD'=>$password, 'FOTO'=>$foto);
			$edit = $this->model_userLog->editUser('student',$data, $id);
			if($edit>0){
				redirect('auth/toList');
			} else {
				echo "Gagal diupdate";
			}
		}

		function updatePost($id){
			$judul = $_POST["judul_artikel"];
      		$isi = $_POST["isi"];
      		date_default_timezone_set('Asia/Jakarta');
      		$tgledit = date('Y-m-d h:i:s a', time());
      		$namaedit = $this->session->userdata('username');
     		$data = array('JUDUL_POST'=>$judul, 'ISI_POST'=>$isi, 'TANGGAL_EDIT'=>$tgledit, 'NAMA_PENGEDIT'=>$namaedit);
			$edit = $this->model_userLog->editPost('posting',$data, $id);
			if($edit>0){
				redirect('auth/toPosting');
			} else {
				echo "Gagal diupdate";
			}
		}

		function formDelete($id){
			$hapus = $this->model_userLog->deleteUser('student',$id);
			if($hapus>0){
				redirect('auth/toList');
			} else {
				echo "Gagal dihapus";
			}
		}

		function formDeletePost($id){
			$hapus_Post = $this->model_userLog->deletePost('posting',$id);
			if($hapus_Post>0){
				redirect('auth/toPosting');
			} else {
				echo "Gagal dihapus";
			}
		}
	}
?>
