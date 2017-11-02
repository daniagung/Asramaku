<?php

/**
 * Created by PhpStorm.
 * User: Motion Laboratory
 * Date: 11/2/2017
 * Time: 7:56 AM
 */
class data
{
    public function dataupload($id)
    {
        $this->load->model('data_model');
        $data['content'] = 'data';
        $data['data'] = $this->data_model->get();
        $this->load->view('layout', $data);
    }
}