<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\CodeigniterAdapter;

class Welcome extends CI_Controller {
	public function __construct()
	{	
		parent:: __construct();
		$this->load->model("mahasiswa");	
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function datatables(){
		// $data = $this->mahasiswa->_getMahasiswa();
		$datatables = new Datatables(new CodeigniterAdapter());
		$datatables->query("select id_mahasiswa,nim, nama,fak_jur,dosen_pa,kampus,jenis_kelamin,semester from mahasiswa");
		print_r($datatables->generate());
	}
}
