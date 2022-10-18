<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends MY_Controller
{
    public function index()
    {
        $data['title']      = 'Admin: Contact';
        $data['content']    = $this->contact->select(
            [
                'contact.id', 'contact.nama', 'contact.telpon', 'contact.kelamin', 'contact.jabatan', 'contact.email', 'contact.image', 'customer.perusahaan'
            ]
        )
            ->join('customer')
            ->get();
        $data['page']       = 'pages/contact/index';

        $this->view($data);
    }

    public function create()
    {
        if (!$_POST) {
            $input = (object) $this->contact->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
            $imageName = url_title($input->title, '-', true) . '-' . date('YmdHis');
            $upload    = $this->contact->uploadImage('image', $imageName);
            if ($upload) {
                $input->image   = $upload['file_name'];
            } else {

                redirect(base_url('contact/create'));
            }
        }


        if (!$this->contact->validate()) {
            $data['title'] = 'Tampah Contact';
            $data['input'] = $input;
            $data['form_action'] = base_url('contact/create');
            $data['page'] = 'pages/contact/form';

            $this->view($data);
            return;
        }

        $this->contact->create($input);
        redirect(base_url('contact'));
    }

    public function edit($id)
    {
        $data['content'] = $this->contact->where('id', $id)->first();

        if (!$data['content']) {
            redirect(base_url('contact'));
        }

        if (!$_POST) {
            $data['input'] = $data['content'];
        } else {
            $data['input'] = (object) $this->input->post(null, true);
        }

        if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
            $imageName = url_title($data['input']->title, '-', true) . '-' . date('YmdHis');
            $upload    = $this->contact->uploadImage('image', $imageName);
            if ($upload) {
                if ($data['content']->image !== '') {
                    $this->contact->deleteImage($data['content']->image);
                }
                $data['input']->image   = $upload['file_name'];
            } else {

                redirect(base_url("contact/edit/$id"));
            }
        }

        if (!$this->contact->validate()) {
            $data['title'] = 'Edit contact';
            $data['form_action'] = base_url("contact/edit/$id");
            $data['page'] = 'pages/contact/form';

            $this->view($data);
            return;
        }

        $this->contact->where('id', $id)->update($data['input']);
        redirect(base_url('contact'));
    }

    public function delete($id)
    {
        if (!$_POST) {
            redirect(base_url('contact'));
        }

        $contact = $this->contact->where('id', $id)->first();

        if (!$contact) {
            redirect(base_url('contact'));
        }

        $this->contact->where('id', $id)->delete();
        $this->contact->deleteImage($contact->image);;
        redirect(base_url('contact'));
    }
}
