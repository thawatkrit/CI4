<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Entities\User;

class Home extends Controller
{
    protected $helpers = ['url', 'form'];
    
	public function index()
	{
	    // Create
	    //$user = new Model()
	    $id = '1';
	    $userModel = new UserModel();
	    
	    $user = $userModel->find([1]);
	    
	    echo $user[0]->username;
	    
	    // Display
	    //print_r($user);
	   // echo $user->email;
	    
// 	    $user = new App
// 	    $user->username = 'foo';
// 	    $user->email    = 'foo@example.com';
// 	    $userModel->save($user);
	    
	    
		echo view('equipment');
	}

	//--------------------------------------------------------------------

}
