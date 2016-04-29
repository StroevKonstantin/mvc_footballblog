<?php
class Langswitch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function switchlanguage($language = "") {

    	if ($language != "") {
    		$language =  $language;
    	} else {
    		$language =  "russian";
    	}

        $this->session->set_userdata('site_lang', $language);
        redirect($_SERVER['HTTP_REFERER']);
    }
}