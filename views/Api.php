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
      
	public function index()
	{
	    $this->db->select("Buyer_Name,Store_Name,Tracking_Number,Zipcode,Order_Date,Estimated,status"); 
        $this->db->where("Tracking_Number", $_POST['number']);
        $User = $this->db->get("Orders");
        $OrderDatail = $User->row();

        $abc = '?>
        <div class="basel-timeline-wrapper basel-timeline-id-5d3c2897abe39">
      <style>
        .basel-timeline-id-5d3c2897abe39 .basel-timeline-dot{
          background-color: #1e73be;
        }
      </style>
      <div class="basel-timeline-line" style="background-color: #e1e1e1;">
        <span class="dot-start" style="background-color: #e1e1e1;"></span>
        <span class="dot-end" style="background-color: #e1e1e1;"></span>
      </div>
      <div class="basel-timeline">
    <div class="basel-timeline-item basel-item-position-left">

      <div class="basel-timeline-dot"></div>

      <div class="timeline-primary" style="background-color: ;">
                
        <span class="timeline-arrow" style="color: ;"></span>
        <h4 class="basel-timeline-title">Ordered Comferemed</h4> 
        <div class="basel-timeline-content">$OrderDatail->Order_Date</div>
      </div>

    </div>
          </div>
    </div>
        <?php';

        print_r(json_encode($abc));
	}
	
	
}
