<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

class Permission extends Controller
{
    protected $helpers = ['url', 'form'];
    
	public function index()
	{
	    return view('login_message');
	}
	
	public function list() {
	    
	}
	
	public function viewDetail() {
	    ;
	}
	
	public function paginationProcess() {
	    ;
	}
	
	public function editProcess() {
	    ;
	}
	
	public function registerProcess() {
	    if (! $this->request->isSecure())
	    {
	        echo $this->request->getVar('username');
	    }
	}

	//--------------------------------------------------------------------

}
