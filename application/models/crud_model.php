<?php

Class Crud_model extends CI_Model
{

    public function get_user_type($id)
    {

        $query = $this->db->get_where('user_type', array('id' => $id));
        return $query->result_array();

    }

    public function get_name_from_coverage_id($coverage_id)
    {

        $query = $this->db->get_where('coverage', array('id' => $coverage_id))->result_array();

        $query_name = $query = $this->db->get_where('address', array('id' => $query[0]['address_id']));
        return $query_name->result_array();

    }

    public function get_addrs_name_from_addrs_id($id)
    {


        $query_name = $query = $this->db->get_where('address', array('id' => $id));
        return $query_name->result_array();


    }
}

?>