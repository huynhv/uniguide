<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class Index extends CI_Controller {
=======
class Welcome extends CI_Controller {
>>>>>>> upstream/maitruongCI

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
<<<<<<< HEAD
		// $this->load->view('welcome_message');
        
        $this->load->view('template/_header');
        // $this->load->view('pages/' . $page);
        $this->load->view('template/_footer');
    
=======
		$this->load->view('welcome_message');
>>>>>>> upstream/maitruongCI
	}
}
