<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends MY_Controller
{
    public function index($page = null)
    {
        $data['title']      = 'Admin: customer';
        $data['content']    = $this->customer->get();
        $data['page']       = 'pages/customer/index';

        $this->view($data);
    }

    public function create()
    {
        if (!$_POST) {
            $input = (object) $this->customer->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->customer->validate()) {
            $data['title'] = 'Tampah Customer';
            $data['input'] = $input;
            $data['form_action'] = base_url('customer/create');
            $data['page'] = 'pages/customer/form';

            $this->view($data);
            return;
        }

        $this->customer->create($input);
        redirect(base_url('customer'));
    }

    public function edit($id)
    {
        $data['content'] = $this->customer->where('id', $id)->first();

        if (!$data['content']) {
            redirect(base_url('customer'));
        }

        if (!$_POST) {
            $data['input'] = $data['content'];
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!$this->customer->validate()) {
            $data['title'] = 'Edit Customer';
            $data['form_action'] = base_url("customer/edit/$id");
            $data['page'] = 'pages/customer/form';

            $this->view($data);
            return;
        }

        $this->customer->where('id', $id)->update($data['input']);
        redirect(base_url('customer'));
    }

    public function delete($id)
    {
        if (!$_POST) {
            redirect(base_url('customer'));
        }

        if (!$this->customer->where('id', $id)->first()) {
            redirect(base_url('customer'));
        }

        $this->customer->where('id', $id)->delete();
        redirect(base_url('customer'));
    }
}
