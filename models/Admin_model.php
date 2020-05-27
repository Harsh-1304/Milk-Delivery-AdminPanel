<?php 
   class Admin_model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function order_update() {

        $this->db->select("*"); 
        $this->db->where('Dispatched_date',date("Y-m-d", strtotime("-3 days"))); 
        $User = $this->db->get("Orders");
        $OrderDatail = $User->result_array();

        foreach ($OrderDatail as $value) {
          
               $json = json_decode($value['status']);

               $json[] = 'Delivered';
               $insert = array(
                  'Delivered_date' => date('Y-m-d'),
                  'status' => json_encode($json)
               ); 
               ///print_r($insert);exit();
               $this->db->where("oid",$value['oid']);
               $this->db->update("Orders", $insert);
         }

      }


      public function pass_mail($email,$pass){

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://mail.globalshyp.com';
        $config['smtp_user'] = 'admin@globalshyp.com';
        $config['smtp_pass'] = 'globalshyp@2019';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        
        $this->email->from("admin@globalshyp.com","New Password");
        $this->email->to($email);
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $msg = "<html><body>New Password :".$pass."<br>";
        $msg .= "<a href='https://admin.globalshyp.com/' taarget='_blank'>Click Here To Login</a></html></body>";
        
        $this->email->subject("New Password");
        $this->email->message($msg);
        
        if($this->email->send())
           return "Sent";
        else
           return show_error($this->email->print_debugger());
      }

   } 
?> 