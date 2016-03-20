<?php
class Footballnews extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('footballnews_model');
                $this->load->helper('url_helper');
                $this->lang->load('Footballnews');
                
                
        }

        public function index($language = "")
        {
        $this->lang->load('Footballnews', $language);

        $data['news'] = $this->footballnews_model->get_news();

        $data['meta_k'] = "Kakie to meta slova";
        $data['meta_d'] = "Kakoe to meta opisanie";

        $data['title'] = $this->lang->line('title');
        $data['subtitle'] = $this->lang->line('subtitle');
        $data['forecast_day'] = $this->lang->line('forecast_day');
        $data['another_forecast'] = $this->lang->line('another_forecast');
        $data['interesting_fact'] = $this->lang->line('interesting_fact');
        $data['another_fact'] = $this->lang->line('another_fact');


        $data['fact'] = $this->footballnews_model->get_fact();
        $data['forecast'] = $this->footballnews_model->get_forecast();
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

    $data['title'] = 'Create a news item';
    $data['author'] = "Konstantin S.Stroyev";
    $data['email_author'] = "konstantin.s.stroyev@gmail.com";

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('chpu', 'URL', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

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
}