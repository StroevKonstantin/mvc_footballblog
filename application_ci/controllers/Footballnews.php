<?php
class Footballnews extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('footballnews_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {

        $data['news'] = $this->footballnews_model->get_news();
        $data['forecast'] = $this->footballnews_model->get_forecast();

        $data['meta_k'] = "рфпл, игры рфпл, рфпл 2016, чемпионат россии, премьер лига, прогнозы рфпл, прогноз на матчи рфпл, обзор рфпл, обзор тура рфпл, обзор матчей рфпл, интересные факты, интересные факты про футбол, сборная россии, сборная россия, сборная россии футболу евро, матчи сборной россии футболу евро";
        $data['meta_d'] = "RUSMatch - информационный сайт о Российском футболе. Обзоры к матчам каждого тура, выделение особенной «Битвы тура», тактики и стратегии команд, ориентировочные составы и некоторые мнения по поводу исхода игр.";

        $data['title'] = $this->lang->line('title');
        $data['subtitle'] = $this->lang->line('subtitle');
        $data['forecast_day'] = $this->lang->line('forecast_day');
        $data['another_forecast'] = $this->lang->line('another_forecast');
        $data['interesting_fact'] = $this->lang->line('interesting_fact');
        $data['another_fact'] = $this->lang->line('another_fact');

        $data['fact'] = $this->footballnews_model->get_fact();
        
        $data['big_event'] = $this->footballnews_model->get_big_event();

        $data['author'] = "Konstantin S.Stroyev";
        $data['email_author'] = "konstantin.s.stroyev@gmail.com";

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/rightmodule', $data);
        $this->load->view('templates/footer', $data);
        }

        public function show($chpu = NULL)
        {
        $data['news_item'] = $this->footballnews_model->get_news($chpu);

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['meta_k'] = $data['news_item']['meta_k'];
        $data['meta_d'] = $data['news_item']['meta_d'];
        $data['title'] = $this->lang->line('title');
        $data['subtitle'] = $this->lang->line('subtitle');

        $data['fact'] = $this->footballnews_model->get_fact();
        $data['forecast'] = $this->footballnews_model->get_forecast();
        $data['forecast_day'] = $this->lang->line('forecast_day');
        $data['another_forecast'] = $this->lang->line('another_forecast');
        $data['interesting_fact'] = $this->lang->line('interesting_fact');
        $data['another_fact'] = $this->lang->line('another_fact');


        $data['author'] = "Konstantin S.Stroyev";
        $data['email_author'] = "konstantin.s.stroyev@gmail.com";

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/rightmodule', $data);
        $this->load->view('templates/footer', $data);

        $this->footballnews_model->set_rate($chpu);
        }

        public function showevent($chpu = NULL)
        {
        $data['news_item'] = $this->footballnews_model->get_big_event($chpu);

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['meta_k'] = "asda";
        $data['meta_d'] = "asda";
        $data['title'] = $this->lang->line('title');
        $data['subtitle'] = $this->lang->line('subtitle');
        $data['forecast_day'] = $this->lang->line('forecast_day');
        $data['another_forecast'] = $this->lang->line('another_forecast');
        $data['interesting_fact'] = $this->lang->line('interesting_fact');
        $data['another_fact'] = $this->lang->line('another_fact');

        $data['fact'] = $this->footballnews_model->get_fact();
        $data['forecast'] = $this->footballnews_model->get_forecast();

        $data['author'] = "Konstantin S.Stroyev";
        $data['email_author'] = "konstantin.s.stroyev@gmail.com";

        $this->load->view('templates/header', $data);
        $this->load->view('news/event', $data);
        $this->load->view('templates/rightmodule', $data);
        $this->load->view('templates/footer', $data);

        }

public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = $this->lang->line('title');
    $data['subtitle'] = $this->lang->line('subtitle');

    $data['author'] = "Konstantin S.Stroyev";
    $data['email_author'] = "konstantin.s.stroyev@gmail.com";
    
    $data['meta_k'] = "";
    $data['meta_d'] = "";

    $this->form_validation->set_rules('title', 'Title', 'required'); // 1
    $this->form_validation->set_rules('chpu', 'URL', 'required'); // 4
    $this->form_validation->set_rules('text', 'Text', 'required'); //6

    $this->form_validation->set_rules('meta_d', 'Meta D', 'required');
    $this->form_validation->set_rules('meta_k', 'Meta K', 'required');
    $this->form_validation->set_rules('img_url', 'Url of img', 'required');

    $this->form_validation->set_rules('small_description', 'Small description', 'required');
    $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
    $this->form_validation->set_rules('source', 'Source', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('news/create');
        $this->load->view('templates/footer', $data);
    }
    else
    {
        $this->footballnews_model->set_news();
        $this->load->view('templates/header', $data);
        $this->load->view('news/success');
        $this->load->view('templates/footer', $data);
    }
}


public function removeentry($chpu){
    $this->footballnews_model->delete_post($chpu); 

    $data['title'] = $this->lang->line('title');
    $data['subtitle'] = $this->lang->line('subtitle');

    $data['author'] = "Konstantin S.Stroyev";
    $data['email_author'] = "konstantin.s.stroyev@gmail.com";
    
    $data['meta_k'] = "";
    $data['meta_d'] = "";

    $this->load->view('templates/header', $data);
    $this->load->view('news/successDelete');
    $this->load->view('templates/footer', $data);  
}

public function removeentryfromdb(){
    $data['title'] = $this->lang->line('title');
    $data['subtitle'] = $this->lang->line('subtitle');

    $data['news'] = $this->footballnews_model->get_news();

    $data['author'] = "Konstantin S.Stroyev";
    $data['email_author'] = "konstantin.s.stroyev@gmail.com";
    
    $data['meta_k'] = "";
    $data['meta_d'] = "";

    $this->load->view('templates/header', $data);
    $this->load->view('news/delete');
    $this->load->view('templates/footer', $data);
}

}