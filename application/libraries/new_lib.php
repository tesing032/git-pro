<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_lib {

        public function __construct()
        {
            $CI =& get_instance();
            if ($CI === null) {
                new CI_Controller();
                $CI =& get_instance();
            }   
		  $CI->config->set_item('sess_expiration', 20);
        }
}