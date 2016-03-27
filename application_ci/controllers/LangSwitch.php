<?php
class LangSwitch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function switchLanguage($language = "") {

    	if ($language != "") {
    		$language =  $language;
    	} else {
    		$language =  "russian";
    	}

        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }
}