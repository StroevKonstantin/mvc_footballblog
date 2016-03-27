<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');

        $site_lang = $ci->session->userdata('site_lang');
        if ($site_lang) {
            $current_lang = $ci->session->userdata('site_lang');
            $ci->lang->load('footballnews',$current_lang);
        } else {
            $ci->lang->load('footballnews','english');
        }
    }
}