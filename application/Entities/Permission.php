<?php namespace App\Entities;

use CodeIgniter\Entity;

class Permission extends Entity
{
    protected $id;
    protected $permission_name;
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