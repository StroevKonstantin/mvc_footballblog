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

        $data['news_item']['title'] = "Новости, обзоры, прогнозы";
        $data['news_item']['subtitle'] = "Главная";

        $data['meta_k'] = "рпл, футбол, 2016, чемпионат россии, лига, прогнозы, обзоры, тур, интересные факты, сборная россии";
        $data['meta_d'] = "RUSMatch - блог о Российском футболе. Обзоры к матчам каждого тура, выделение «Битвы тура», тактики и трансферы команд, интересные факты и прогнозы на исходы игр.";
        $data['meta_img'] = "";
        $data['meta_a'] = "";        

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
        // $this->load->view('news/about');
        $this->load->view('templates/footer', $data);
        }

        public function show($chpu = NULL)
        {
        $data['news'] = $this->footballnews_model->get_relnews();
        $data['news_item'] = $this->footballnews_model->get_news($chpu);

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['meta_k'] = $data['news_item']['meta_k'];
        $data['meta_d'] = $data['news_item']['meta_d'];
        $data['title'] = $this->lang->line('title');
        $data['subtitle'] = $this->lang->line('subtitle');

        $data['meta_img'] = $data['news_item']['img_url'];
        $data['meta_a'] = $data['news_item']['chpu'];      

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

        $data['meta_k'] = "";
        $data['meta_d'] = "";
        $data['meta_img'] = "";
        $data['meta_a'] = "";  

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
    $data['meta_img'] = "";
    $data['meta_a'] = "";  

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

public function createevent()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = $this->lang->line('title');
    $data['subtitle'] = $this->lang->line('subtitle');

    $data['author'] = "Konstantin S.Stroyev";
    $data['email_author'] = "konstantin.s.stroyev@gmail.com";
    
    $data['meta_k'] = "";
    $data['meta_d'] = "";
    $data['meta_img'] = "";
    $data['meta_a'] = "";  

    $this->form_validation->set_rules('title', 'Title', 'required'); // 1
    $this->form_validation->set_rules('chpu', 'URL', 'required'); // 2
    $this->form_validation->set_rules('article', 'Article', 'required'); //9

    $this->form_validation->set_rules('meta_d', 'Meta D', 'required');//3
    $this->form_validation->set_rules('meta_k', 'Meta K', 'required');//4
    $this->form_validation->set_rules('bg', 'Background', 'required');//7

    $this->form_validation->set_rules('text', 'Text', 'required');//6
    $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');//5
    $this->form_validation->set_rules('source', 'Source', 'required');//8

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('news/createevent');
        $this->load->view('templates/footer', $data);
    }
    else
    {
        $this->footballnews_model->set_event();
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
    $data['meta_img'] = "";
    $data['meta_a'] = "";  

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
    $data['meta_img'] = "";
    $data['meta_a'] = "";  

    $this->load->view('templates/header', $data);
    $this->load->view('news/delete');
    $this->load->view('templates/footer', $data);
}

}