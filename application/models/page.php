<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Model {
     

    function get_all()
    {
        return $this->db->query("SELECT id, first_name, last_name, email, joined_datetime FROM clients")->result_array();
    }

    function get_limit($num)
    {
        $limit = $num * 10 - 10;
        return $this->db->query("SELECT id, first_name, last_name, email, joined_datetime FROM clients LIMIT ?, 10", $limit)->result_array();
    }

    function name_search($name, $num)
    {   
        $limit = $num * 10 - 10;
        return $this->db->query("SELECT id, first_name, last_name, email, joined_datetime FROM clients WHERE first_name LIKE '$name%' OR last_name LIKE '$name%' OR email LIKE '$name%' LIMIT ?, 10 ", $limit)->result_array();
    }

    function all_name_search($name)
    {
        return $this->db->query("SELECT id, first_name, last_name, email, joined_datetime FROM clients WHERE first_name LIKE '$name%' OR last_name LIKE '$name%' OR email LIKE '$name%' ")->result_array();
    }

}
