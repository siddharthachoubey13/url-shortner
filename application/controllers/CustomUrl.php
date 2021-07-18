<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CustomUrl extends CI_Controller
{

	/**
	 * Inserts mapping of URL in table
	 * Shows shortend URL in view
	 */
	public function Create()
	{
		$this->load->model('model');

		$postData = $this->input->post();

		if (!empty($postData)) {

			$url = $postData['url'];
			$id = $this->model->insertData($url);

			$shortUrl = $this->createShortUrl($id);
			header('Location: show_urls');
		} else {
			$this->load->view('home');
		}
	}

	/**
	 * @param int ID
	 * @return str shortend URL
	 */
	private function createShortUrl($id)
	{
		return SHORT_URL . base64_encode($id);
	}

	public function showUrls()
	{
		$this->load->model('model');
		$result['data'] = $this->model->getAllUrls();
		
		$this->load->view('table', $result);

	}
}
