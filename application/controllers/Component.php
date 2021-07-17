<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {
	
	public function hitung_zakat() {
            $site = $this->mConfig->list_config();
            $data = array ('title' => 'Hitung Zakat');
            $this->load->view('front/'.$site['theme'].'/component/hitung_zakat',$data);
	}	
}