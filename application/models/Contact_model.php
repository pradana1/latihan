<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends MY_Model
{
    protected $table = 'contact';

    public function getDefaultValues()
    {
        return [
            'id' => '',
            'id_customer' => '',
            'nama' => '',
            'telpon' => '',
            'kelamin' => '',
            'jabatan' => '',
            'email' => '',
            'image' => ''
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_customer',
                'label' => 'Customer',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'telpon',
                'label' => 'Telpon',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'kelamin',
                'label' => 'Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ],
        ];

        return $validationRules;
    }

    public function uploadImage($fieldName, $fileName)
    {
        $config = [
            'upload_path'       => './images/contact',
            'file_name'         => $fileName,
            'allowed_types'     => 'jpg|gif|png|jpeg|JPG|PNG',
            'max_size'          => '1024',
            'max_width'         => 0,
            'max_height'        => 0,
            'overwrite'         => true,
            'file_ext_tolower'  => true
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($fieldName)) {
            return $this->upload->data();
        } else {
            $this->session->set_flashdata('image_error', $this->upload->display_errors('', ''));
            return false;
        }
    }

    public function deleteImage($fileName)
    {
        if (file_exists("./images/contact/$fileName")) {
            unlink("./images/contact/$fileName");
        }
    }
}
