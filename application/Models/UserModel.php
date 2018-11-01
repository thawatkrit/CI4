<?php namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table         = 'user';
    protected $primaryKey    = 'id';
    protected $allowedFields = [
        'username', 'password', 'permission_id', 'created_at', 'updated_at'
    ];
    protected $returnType    = 'App\Entities\User';
    protected $useTimestamps = true;
    
    public function login($username, $password) {
        $user = $this->where([
            'username' => $username,
            'password' => $password
        ])
        ->first();
        
        return $user;
    }
   

}
