<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function website_details()
    {
        $query = $this->db->get('website_details');
        return $query->row_array();
    }

    public function website_pages($slug)
    {
        $query = $this->db->get_where('website_pages', array('page_slug' => $slug));
        return $query->row_array();
    }
}