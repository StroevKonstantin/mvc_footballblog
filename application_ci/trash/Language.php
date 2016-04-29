<?php 

class Language extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        $lang_uri_abbr = $this->config->item('lang_uri_abbr');

        if ($this->uri->segment(2) === false ||
            ! isset($lang_uri_abbr[$this->uri->segment(2)]))
        {
            redirect();
        }
        else
        {
            $site_url = substr(site_url(), 0, -2);

            redirect($site_url . $this->uri->segment(2));
        }
    }
}

?>