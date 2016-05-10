<?php
class Footballnews_model extends CI_Model {

        public function __construct(){
                $this->load->database();
        }

        public function get_news($chpu = FALSE){
                if ($chpu === FALSE){
                        $this->db->order_by('id','DESC');
                        $query = $this->db->get('news');
                        return $query->result_array();
                }

            $query = $this->db->get_where('news', array('chpu' => $chpu));
            return $query->row_array();
        }

        public function set_news()
        {
                $this->load->helper('url');

                $data = array(
                    'title' => $this->input->post('title'), //title 1
                    'meta_k' => $this->input->post('meta_k'), // meta_k 2
                    'meta_d' => $this->input->post('meta_d'), // meta_d 3
                    'chpu' => $this->input->post('chpu'), // chpu 4
                    'img_url' => $this->input->post('img_url'), // img_url 5
                    'text' => $this->input->post('text'), // text 6
                    
                    'small_description' => $this->input->post('small_description'), // img_url 7
                    // 'date' => $this->input->post('date'), // date 8

                    'subtitle' => $this->input->post('subtitle'), // subtitle 9
                    // 'rate' => $this->input->post('rate'), // rate 10

                    'source' => $this->input->post('source') // 11
                );

            return $this->db->insert('news', $data);
        }

        public function delete_post($chpu)
        {
            $this->db->where('chpu', $chpu);
            $this->db->delete('news');
        }

        public function set_rate($chpu = FALSE)
        {
            $this->db->set('rate', 'rate+1', FALSE);
            $this->db->where('chpu', $chpu);
            $this->db->update('news');
        }

        public function get_fact($id = 1){

            $query = $this->db->get_where('facts', array('id' => $id));
            return $query->row_array();
        }

        public function get_forecast(){

            $this->db->order_by('id','DESC');
            $query = $this->db->get('forecasts');
            return $query->result_array();
        }

        public function get_big_event($chpu = FALSE){

            $this->db->order_by("id", "desc");
            $this->db->limit(1);
            $query = $this->db->get('big_event');

            // $query = $this->db->get_where('big_event', array('chpu' => $chpu));
            return $query->row_array();
        }

         public function set_event()
        {
                $this->load->helper('url');

                $data = array(
                    'title' => $this->input->post('title'), //title 1
                    'meta_k' => $this->input->post('meta_k'), // meta_k 2
                    'meta_d' => $this->input->post('meta_d'), // meta_d 3
                    'chpu' => $this->input->post('chpu'), // chpu 4
                    'bg' => $this->input->post('bg'), // img_url 5
                    'text' => $this->input->post('text'), // text 6
                    
                    'article' => $this->input->post('article'), // img_url 7
                    // 'date' => $this->input->post('date'), // date 8

                    'subtitle' => $this->input->post('subtitle'), // subtitle 9
                    // 'rate' => $this->input->post('rate'), // rate 10

                    'source' => $this->input->post('source') // 11
                );

            return $this->db->insert('big_event', $data);
        }
}
