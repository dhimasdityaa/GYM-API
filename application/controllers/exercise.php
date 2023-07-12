<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Exercise extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $eid = $this->get('eid');
        if ($eid == '') {
            $exercise = $this->db->get('exercise')->result();
        } else {
            $this->db->where('eid', $eid);
            $exercise = $this->db->get('exercise')->result();
        }
        $this->response($exercise, 200);
    }


    //Masukan function selanjutnya disini
}
?>