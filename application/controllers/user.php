<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('uid');
        if ($id == '') {
            $user = $this->db->get('user')->result();
        } else {
            $this->db->where('uid', $uid);
            $user = $this->db->get('user')->result();
        }
        $this->response($user, 200);
    }


    //Masukan function selanjutnya disini
}
?>