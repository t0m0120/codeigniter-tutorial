<?php
	class News extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('news_models');
		}
	}
