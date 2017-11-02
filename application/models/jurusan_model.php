<?php

/**
 * Created by PhpStorm.
 * User: Motion Laboratory
 * Date: 11/2/2017
 * Time: 1:45 PM
 */
class jurusan_model extends CI_Model
{
    public function getJurusanAll()
    {
        $query = $this->db->get('jurusan');
        return $query->result();
    }

}