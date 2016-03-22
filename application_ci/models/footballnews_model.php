<?php
class footballnews_model extends CI_Model {

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

                // $chpu = url_title($this->input->post('title'), 'dash', TRUE);

                $data = array(
                    'title' => $this->input->post('title'),
                    'chpu' => $this->input->post('chpu'),
                    'text' => $this->input->post('text')
                );

            return $this->db->insert('news', $data);
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

        public function get_forecast($id = 1){

            $this->db->order_by('id','DESC');
            $query = $this->db->get('forecasts');
            return $query->result_array();
        }

        public function get_big_event($chpu = FALSE){


            $query = $this->db->get_where('big_event', array('chpu' => $chpu));
            return $query->row_array();
        }
}