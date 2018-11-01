<?php namespace App\Models;

use CodeIgniter\Model;

class selectModel extends Model
{
    protected $table         = 'user';
    protected $primaryKey    = 'id';
    protected $allowedFields = [
        'username', 'password', 'permission_id', 'created_at', 'updated_at'
    ];
    protected $returnType    = 'App\Entities\User';
    protected $useTimestamps = true;

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    } 
 
    function myfetchtable_list(){  
            $sql = "select * from equipment";
            $query = $this->db->query($sql);
            

            return $quer;  
    } 
    }
}
