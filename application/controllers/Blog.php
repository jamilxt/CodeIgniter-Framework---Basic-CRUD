<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/11/2018
 * Time: 6:07 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model', 'model');
    }

    function index()
    {
        $data['blogs'] = $this->model->getBlog();
        $this->load->view('layout/header');
        $this->load->view('blog/index', $data);
        $this->load->view('layout/footer');
    }

    public function add()
    {
        $this->load->view('layout/header');
        $this->load->view('blog/add');
        $this->load->view('layout/footer');
    }

    public function submit()
    {
        $result = $this->model->submit();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record added successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Fail to add record');
        }
        redirect(base_url('blog/index'));
    }

    public function edit($id)
    {
        $data['blog'] = $this->model->getBlogById($id);
        $this->load->view('layout/header');
        $this->load->view('blog/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $result = $this->model->update();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record updated successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Fail to update record');
        }
        redirect(base_url('blog/index'));
    }

    public function delete($id) {
        $result = $this->model->delete($id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record deleted successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Fail to delete record');
        }
        redirect(base_url('blog/index'));
    }

}