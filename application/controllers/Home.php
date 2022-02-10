<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
	}

	public function index() {
		$data = loadDefaultDataFront();
		$data['slider'] = $this->back_m->get_all('slider');
		$data['welcome'] = $this->back_m->get_one('welcome', 1);
		$data['about'] = $this->back_m->get_all('about');
		$data['about_icons'] = [];
		$data['about_descriptions'] = $this->back_m->get_one('about_descriptions', 1);
		$data['offers'] = $this->back_m->get_all('offers');
		$data['rental'] = $this->back_m->get_one('rental', 1);
		$data['rental_descriptions'] = $this->back_m->get_one('rental_descriptions', 1);
		$data['rental_squares'] = $this->back_m->get_all('rental_squares', 'menu_order');
		$data['services'] = $this->back_m->get_all('services');
		$data['advices'] = $this->back_m->get_all('advices');
		$data['departments'] = $this->back_m->get_all('departments');
		$data['contact_descriptions'] = $this->back_m->get_one('contact_descriptions', 1);

		foreach($data['about'] as $a) {
			$data['about_icons'][$a->id] = $this->back_m->get_all_where('about_icons', 'about_id', $a->id);
		}


		echo loadViewsFront('index', $data);
	}
}