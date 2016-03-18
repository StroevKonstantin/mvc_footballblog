<?php
class Pages extends CI_Controller {

        public function show($page = 'home')
        {
        	 if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        	{
                // Whoops, we don't have a page for that!
                show_404();
        	}

        	$data['title'] = ucfirst($page);
        	$data['text'] = "
                <p>РФПЛ, кто не знает – Российская Футбольная Премьер Лига, хотя тот, кто посетил сей сайт, точно должен знать всю прелесть этой аббревиатуры. Российская лига – один из любопытнейших турниров в сфере футбола. Имеет свою красоту, своих лидеров и звезд, является стабильным поставщиком команд в Евротурниры.</p>
                <p>Что мы можем вам предложить? Обзоры к матчам каждого тура, выделение особенной «Битвы тура», тактики и стратегии команд, ориентировочные составы и некоторые мнения по поводу исхода игр. В перерывах между турами будем представлять сводку и разбор спорных моментов, основанных на личных и экспертных мнениях.</p> 
                <p>Ближайший 19 тур, который начнется 5 марта, будет отмечен как старт второй половины чемпионата. Самый момент узнать, какие сюрпризы приготовили команды друг другу после зимних каникул!</p>
                ";
        	$data['author'] = "Konstantin S.Stroyev";
                $data['email_author'] = "konstantin.s.stroyev@gmail.com";
        	
        	$this->load->view('templates/header', $data);
        	$this->load->view('pages/'.$page, $data);	
        	$this->load->view('templates/footer', $data);
        }
}

?>