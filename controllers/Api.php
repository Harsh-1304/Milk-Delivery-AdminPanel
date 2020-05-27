<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

  function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
          $this->load->library('session');
         $this->load->database();
          header('Access-Control-Allow-Origin: *');
          header('Access-Control-Allow-Methods: GET, POST');
          header("Access-Control-Allow-Headers: X-Requested-With");
      } 
      
	public function Register(){

	    $json = file_get_contents('php://input');
	    $post = json_decode($json);
		if ($post->username == "Milk" && $post->key == "Milk@2020"){

			$this->db->select("email,phone"); 
	        $this->db->where("phone", $post->phone);
	        $this->db->where("email", $post->email);
	        $User = $this->db->get("Users");
	        $UsersDatail = $User->row();

	        if ($UsersDatail) {
	        	print_r('failed');
	        }else{

				$data = array(
					'name' => $post->name, 
					'email' => $post->email, 
					'pass' => md5($post->password), 
					'address' => $post->address, 
					'city' => $post->city, 
					'phone' => $post->phone,
					'active' => 1,
					'date' => date('Y-m-d'), 
				);
				$this->db->insert("Users", $data);
				$uid = $this->db->insert_id();

				$this->db->select("Users.uid,Users.name,Users.email,Users.phone,Users.city,Users.address"); 
		        $this->db->where("Users.uid", $uid);
		        $User = $this->db->get("Users");
		        $UsersDatail = $User->row();
				if($UsersDatail)
					print_r(json_encode($UsersDatail,JSON_PRETTY_PRINT));
				else
					print_r('failed');
			}
		}
		else{
		    print_r(json_encode($post,JSON_PRETTY_PRINT));
		}
	}
	
	public function Login(){
	    $json = file_get_contents('php://input');
	    $post = json_decode($json);
		if ($post->username == "Milk" && $post->key == "Milk@2020"){

			$this->db->select("Users.uid,Users.name,Users.email,Users.phone,Users.city,Users.address"); 
	        $this->db->where("Users.phone", $post->phone);
			$this->db->where("Users.pass", md5($post->password));
	        $User = $this->db->get("Users");
	        $UsersDatail = $User->row();
	
	        if($UsersDatail){
	        	print_r(json_encode($UsersDatail,JSON_PRETTY_PRINT));
	        }
	        else{ 
	        //print_r(json_encode(array('response' => 'Invalid')));
	        print_r("Invalid");
	        }
	    }	
	}

	public function Product(){
		$json = file_get_contents('php://input');
	    $post = json_decode($json);
		if ($post->username == "Milk" && $post->key == "Milk@2020"){
			$this->db->select("*"); 
	        $Product = $this->db->get("product");
	        $ProductDatail = $Product->result_array();

	        if($ProductDatail){
	        	print_r(json_encode($ProductDatail,JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT));
	        }
	        else{ 
	        	//print_r(json_encode(array('response' => 'Invalid')));
	        	print_r("Invalid");
	        }
		}
	}

	public function cart(){
		$json = file_get_contents('php://input');
	    $post = json_decode($json);

	    if ($post->username == "Milk" && $post->key == "Milk@2020"){

	    	$this->db->select("*"); 
	        $this->db->where("uid", $post->uid);
	        $this->db->where("pid", $post->pid);
	        $User = $this->db->get("cart");
	        $Detail = $User->row();

			if($Detail){}else{
	    		$array = array("uid" => $post->uid,"pid"=>$post->pid,"qty"=>$post->qty,"date_time"=>date('Y-m-d h:i:s'));
	    		$this->db->insert("cart",$array);
	        }

	    	$this->db->select("*"); 
	        $this->db->where("uid", $post->uid);
	        $User = $this->db->get("cart");
	        $CartDatail = $User->result_array();

	        foreach ($CartDatail as $pid) {
				$this->db->select("p.*,ct.qty"); 
				$this->db->join('cart ct',"ct.pid =  p.id");
				$this->db->where("p.id", $pid['pid']);
	        	$Product = $this->db->get("product p");
		
		        $ProductDatail = $Product->row();

		        $product[] = $ProductDatail;
	        }

	        $data['cart_items'] = $product;

	        print_r(json_encode($product,JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT));
	    }
	    //print_r(json_encode($post,JSON_PRETTY_PRINT));
	    
	}

	public function getcart(){

		$json = file_get_contents('php://input');
	    $post = json_decode($json);

	    if ($post->username == "Milk" && $post->key == "Milk@2020"){

	    	$this->db->select("*"); 
	        $this->db->where("uid", $post->uid);
	        $User = $this->db->get("cart");
	        $CartDatail = $User->result_array();

	        $product = array();

	        foreach ($CartDatail as $pid) {
	        	$this->db->select("p.*,ct.qty");  
				$this->db->join('cart ct',"ct.pid =  p.id");
				$this->db->where("p.id", $pid['pid']);
	        	$Product = $this->db->get("product p");
		
		        $ProductDatail = $Product->row();

				$product[] = $ProductDatail;
	        }

	        //$data['cart_items'] = $product;

	        print_r(json_encode($product,JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT));
	    }

	}

	public function deletecart(){

		$json = file_get_contents('php://input');
	    $post = json_decode($json);

	    if ($post->username == "Milk" && $post->key == "Milk@2020"){

			$this->db->where("uid", $post->uid);
			$this->db->where("pid", $post->pid);
		    $this->db->delete("cart");

		    print_r(json_encode(array('response' => 'Success')));
		}
		else
		{
		    print_r(json_encode(array('response' => 'Failed')));
		}
	}

	public function Subscription(){
		$json = file_get_contents('php://input');
	    $post = json_decode($json);
		if ($post->username == "Milk" && $post->key == "Milk@2020"){

			$uid = $post->uid;
			$order_items = $post->order_items;
			$point = 0;$price=0;
			foreach ($order_items as  $pid) {
				$this->db->select("*"); 
		        $this->db->where("id", $pid->pid);
		        $User = $this->db->get("product");
		        $ProductDatail = $User->row();

		        $this->db->where("pid", $pid->pid);
				$this->db->delete("cart");
				
				$price +=($ProductDatail->Price * $pid->qty);
			}

	        $order = array(
	        	'uid'=>$uid,
				'pid'=>json_encode($order_items),
				'start_date' => $post->start_date,
				'end_date' => $post->end_date,
	        	'CreateDate'=>date('Y-m-d h:i:s')
	        );
	        $this->db->insert("subscription", $order);
			$oid = $this->db->insert_id();

	        $insert = array(
	        	'uid'=>$uid,
	        	'amount'=>$price,
				'date_time'=>date('Y-m-d h:i:s'),
				't_status'=>'Success',
	        	//'order_gatway_id'=>$oid
	        	'order_gatway_id'=>$post->order_gateway_id
			);
	        $this->db->insert("payment_log", $insert);
     
			print_r(json_encode(array('response' => 'Success')));
		}
	}

	public function generateChecksum(){

		$json = file_get_contents('php://input');
	    $post = json_decode($json);

		require_once("./application/libraries/config_paytm.php");
		require_once("./application/libraries/encdec_paytm.php");
		$checkSum = "";

		// below code snippet is mandatory, so that no one can use your checksumgeneration url for other purpose .
		$findme = 'REFUND';
		$findmepipe = '|';

		$paramList = array();

		$paramList["MID"] = '';
		$paramList["ORDER_ID"] = '';
		$paramList["CUST_ID"] = '';
		$paramList["INDUSTRY_TYPE_ID"] = '';
		$paramList["CHANNEL_ID"] = '';
		$paramList["TXN_AMOUNT"] = '';
		$paramList["WEBSITE"] = '';

		foreach ($_POST as $key => $value) {
		    $pos = strpos($value, $findme);
		    $pospipe = strpos($value, $findmepipe);
		    if ($pos === false || $pospipe === false) {
		        $paramList[$key] = $value;
		    }
		}

		//Here checksum string will return by getChecksumFromArray() function.
		$checkSum = getChecksumFromArray($paramList, PAYTM_MERCHANT_KEY);
		//print_r($_POST);
		echo json_encode(array("CHECKSUMHASH" => $checkSum, "ORDER_ID" => $_POST["ORDER_ID"], "payt_STATUS" => "1"));
		//Sample response return to SDK

		//  {"CHECKSUMHASH":"GhAJV057opOCD3KJuVWesQ9pUxMtyUGLPAiIRtkEQXBeSws2hYvxaj7jRn33rTYGRLx2TosFkgReyCslu4OUj\/A85AvNC6E4wUP+CZnrBGM=","ORDER_ID":"asgasfgasfsdfhl7","payt_STATUS":"1"} 
	}

}
?>
