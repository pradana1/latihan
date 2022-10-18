<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends MY_Model
{
    protected $table = 'customer';

    public function getDefaultValues()
    {
        return [
            'id' => '',
            'perusahaan' => '',
            'alamat_perusahaan' => '',
            'no_telp' => '',
            'no_fax' => '',
            'sektor_usaha' => '',
            'negara' => '',
            'lokasi' => ''
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'perusahaan',
                'label' => 'perusahaan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'alamat_perusahaan',
                'label' => 'alamat_perusahaan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'no_telp',
                'label' => 'no_telp',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'no_fax',
                'label' => 'no_fax',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'sektor_usaha',
                'label' => 'sektor_usaha',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'negara',
                'label' => 'negara',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'lokasi',
                'label' => 'lokasi',
                'rules' => 'trim|required'
            ],
        ];

        return $validationRules;
    }
}
