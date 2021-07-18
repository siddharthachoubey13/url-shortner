<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ShortUrl extends CI_Controller
{

	public function index($hash)
	{
		$id = base64_decode($hash);
		
		if (!empty($id)) {

			$this->load->model('model');
			$this->load->helper('url');

			$mappedUrl = $this->model->getUrl($id);

			$this->model->trackOpen($id);
			
			header('Location: '.$mappedUrl);
		}
	}
}
