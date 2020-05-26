<?php
	class model_userLog extends CI_Model{

		public function login($username, $password){
			$periksa = $this->db->get_where('student', array('USERNAME'=>$username,'PASSWORD'=>$password));
			if($periksa->num_rows()>0){
				return 1;
			} else {
				return 0;
			}
		}

		public function get_all_user(){
 			$query = $this->db->order_by('NIM','DESC')->get('student');
 			return $query->result();
 		}

 		public function get_all_posting(){
 			$query = $this->db->get('posting');
 			return $query->result();
 		}

 		public function addUser($table_name,$data){
 			$tambah = $this->db->insert($table_name,$data);
 			return $tambah;
 		}

 		public function addPost($table_name,$data){
 			$tambahPost = $this->db->insert($table_name,$data);
 			return $tambahPost;
 		}

 		public function getDataEdit($table_name, $id){
 			$this->db->where('NIM',$id);
 			$query = $this->db->get($table_name);
 			return $query->row();
 		}

 		public function getDataPostEdit($table_name, $id){
 			$this->db->where('ID_POST',$id);
 			$query = $this->db->get($table_name);
 			return $query->row();
 		}

 		public function editUser($table_name, $data, $id){
 			$this->db->where('NIM',$id);
 			$edit = $this->db->update($table_name, $data);
 			return $edit;
 		}

 		public function editPost($table_name, $data, $id){
 			$this->db->where('ID_POST',$id);
 			$edit = $this->db->update($table_name, $data);
 			return $edit;
 		}

 		public function deleteUser($table_name,$id){
 			$this->db->where('NIM',$id);
 			$hapus = $this->db->delete($table_name);
 			return $hapus;
 		}

 		public function deletePost($table_name,$id){
 			$this->db->where('ID_POST',$id);
 			$hapusPost = $this->db->delete($table_name);
 			return $hapusPost;
 		}
	}
?>
