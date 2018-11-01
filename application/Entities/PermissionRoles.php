<?php namespace App\Entities;

use CodeIgniter\Entity;

class PermissionRoles extends Entity
{
    protected $id;
    protected $permission_id;
    protected $permission_key;
    protected $created_at;
    protected $updated_at;
    
    public function __get($key)
    {
        if (property_exists($this, $key))
        {
            return $this->$key;
        }
    }
    
    public function __set($key, $value)
    {
        if (property_exists($this, $key))
        {
            $this->$key = $value;
        }
    }
}