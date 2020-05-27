	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->library('session');
         $this->load->database();
         $this->load->model('Admin_model');
      } 
      
	public function index()
	{
	    $uid = $this->session->userdata('uid');
	    if($uid != ""){
	        redirect('Admin/Dashboard');
	    }
		$this->load->view('login');
	}
	
	public function logout(){
	    $this->session->unset_userdata('uid');
	    $this->session->unset_userdata('name');
	    $this->session->unset_userdata('error');
	    $this->session->unset_userdata('msg');
	    redirect(base_url());
	}
	
	public function Login(){
	    
        $this->db->select("*"); 
        $this->db->where("email", $_POST['email']);
        $this->db->where("pass", md5($_POST['pass']));
        $User = $this->db->get("admin");
        $UserDatail = $User->row();
        if($UserDatail){
           $data = array("uid" => $UserDatail->uid,"name" => $UserDatail->name);
           $this->session->set_userdata($data);
           redirect('Admin/Dashboard');
        }else{
        	$data = array("error" => "1");
            $this->session->set_userdata($data);
            redirect(base_url());
        }

	}

	public function Forgotpass(){
	    
        if($_POST){

        	$this->db->select("*"); 
	        $this->db->where("email", $_POST['email']);
	        $User = $this->db->get("User");
	        $UserDatail = $User->row();
	        if($UserDatail){
	        	$data = array("msg" => "success");
                $this->session->set_userdata($data);
                $pass = rand(1000,10000);
                $insert = array('pass' => md5($pass));
                $this->db->where("email",$_POST['email']);
        		$this->db->update("User", $insert);
        		$this->Admin_model->pass_mail($_POST['email'],$pass);
	        }else{
	        	$data = array("msg" => "fail");
                $this->session->set_userdata($data);
	        }
        }

        $this->load->view('forgot');
	}
	
	public function Dashboard(){
	    $uid = $this->session->userdata('uid');
	    if($uid == ""){
	        redirect(base_url());
	    }
	
	    $this->template->set('title', 'Dashboard');
		$this->template->load('template', 'contents' , 'Dashboard');
		}
	
	public function add(){
		$uid = $this->session->userdata('uid');
	    if($uid == ""){
	        redirect(base_url());
	    } 
	    if($_POST){

			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$img_data = $this->upload->data();
				$image = base_url() .'assets/img/' . $img_data['file_name'];
			}else{
				echo $this->upload->display_errors();
			}

	        $data = array(
	            "name" => $_POST['name'],
	            "price" => $_POST['price'],
	            "image" => $image,
	            "catagory" => $_POST['catagory'],
	            "weight" => $_POST['weight'],
	            "weight_type" => $_POST['weight_type'],
			);
			
	        $this->db->insert("product", $data);
	        redirect(base_url('Admin/list'));
	        echo "<pre>";print_r($data);exit();
	    }

	    $this->template->set('title', 'Add Product');
		$this->template->load('template', 'contents' , 'add');
	}

	public function list(){

		$uid = $this->session->userdata('uid');
	    if($uid == ""){
	        redirect(base_url());
	    }

		$this->db->select("*"); 
        $User = $this->db->get("product");
        $data['list'] = $User->result_array();

        $this->template->set('title', 'Product List');
		$this->template->load('template', 'contents' , 'list', $data);
	}

	public function userlist(){

		$uid = $this->session->userdata('uid');
	    if($uid == ""){
	        redirect(base_url());
	    }

		$this->db->select("*"); 
        $User = $this->db->get("Users");
        $data['list'] = $User->result_array();

        $this->template->set('title', 'List User');
		$this->template->load('template', 'contents' , 'userlist', $data);
	}

	public function change_pass(){

		$uid = $this->session->userdata('uid');
	    if($uid == ""){
	        redirect(base_url());
	    }

	    $data['msg'] = "0";

	    if($_POST){

		    $this->db->select("*");
		    $this->db->where("uid",$uid);
		    $this->db->where("pass",md5($_POST['current']));
	        $User = $this->db->get("admin");
	        $Pass = $User->row();

	        if($Pass){

	        	$insert = array('pass' => $_POST['new']);
	        	$this->db->where("uid",$uid);
	        	$this->db->update("admin", $insert);

	        	$data['msg'] = "success";

	        }
	        else{
	        	$data['msg'] = "fail";
	        }
	    }

	    $this->template->set('title', 'Change Password');
		$this->template->load('template', 'contents' , 'change_pass',$data);

	}

	function delete(){

		$this->db->where("id",$_POST['did']);
	    $this->db->delete("product");

	    redirect('Admin/list');

	}

	function userstatus(){

		$uid = $this->uri->segment(3);

		$this->db->select("active");
		$this->db->where("uid",$uid);
	    $User = $this->db->get("Users");
	    $active = $User->row();

	    if($active->active == 1)
			$insert = array('active' => 0);
		else
			$insert = array('active' => 1);

		//print_r($insert);exit();
	    $this->db->where("uid",$uid);
	    $this->db->update("Users", $insert);

	    redirect('Admin/userlist');
	}

	function update(){

		$oid = $this->uri->segment(3);
		$this->db->select("*"); 
        $this->db->where("id", $oid);
        $User = $this->db->get("product");
        $OrderDatail = $User->row();

        if($_POST){

	        $data = array(
	            "name" => $_POST['name'],
	            "price" => $_POST['price'],
	            "catagory" => $_POST['catagory'],
	            "weight" => $_POST['weight'],
	            "weight_type" => $_POST['weight_type'],
			);

        	$this->db->where("id", $oid);
	        $this->db->update("product", $data);

	        redirect('Admin/list');
        }

        $data['list'] = $OrderDatail;

        $this->template->set('title', 'Update Order');
		$this->template->load('template', 'contents' , 'add',$data);

	}
}
