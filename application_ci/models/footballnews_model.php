<?php
class footballnews_model extends CI_Model {

        public function __construct(){
                $this->load->database();
        }

        public function get_news($chpu = FALSE){
                if ($chpu === FALSE){
                        $this->db->order_by('date','DESC');
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
}