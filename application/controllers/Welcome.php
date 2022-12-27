<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function index()
	{  
		// $time=10;
		// $this->config->set_item('sess_expiration', $time); 
		// $this->config->set_item('sess_expiration', 23);
		// $this->load->library('new_lib');
		// $this->load->library('session');
		// $this->session->sess_expiration = '15';
		echo"<pre>";
		// print_r($this->config->item('sess_expiration'));
		print_r($this->config);
		echo"<br>";
		print_r($this->session);
		// $this->load->view('welcome_message');

//Start a new session

// session_start();

// //Set the session duration for 5 seconds

// $duration = $this->config->set_item('sess_expiration', $time); ;

// //Read the request time of the user

// $time = $_SERVER['REQUEST_TIME'];

// //Check the user's session exist or not

// if (isset($_SESSION['LAST_ACTIVITY']) &&

//    ($time - $_SESSION['LAST_ACTIVITY']) > $duration) {

//     //Unset the session variables

//     session_unset();

//     //Destroy the session

//     session_destroy();

//     //Start another new session

//     // session_start();

//     echo " session is deleted.<br/>";

// }

// else

//     echo "Current session exists.<br/>";  

// //Set the time of the user's last activity

// $_SESSION['LAST_ACTIVITY'] = $time;
	}
}
