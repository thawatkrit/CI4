<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Entities\User;

class Login extends Controller
{
    protected $helpers = ['url', 'form'];
    protected $userModel;
    
    public function __construct() {
    }
    
	public function index()
	{
	    return view('login_message');
	}
	
	public function process() {
	    if (! $this->request->isSecure())
	    {
	        //$user = new User();
	        $userModel = new UserModel();
	        
	        $username = $this->request->getVar('username');
	        $password = $this->request->getVar('password');
	        
	        $user = $userModel->login($username, $password);
	        
	        //print_r($user);
	        //set session
	        $newData = array(
	            'username' => $user->username,
	            'password' => $user->password
	        );
	        $session = session();
	        $session->set($newData);
	        
	        return redirect(site_url('login/view'));
	    }
	}
	
	public function view() {
	    echo (session('username'));
	}
	
	public function logout() {
	    $session = session();
	    $session->destroy();
	    
	    
	    echo site_url('login/index');
	    
	    return redirect(site_url('login/index'));
	}

	//--------------------------------------------------------------------

}
