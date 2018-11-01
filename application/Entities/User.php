<?php namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    protected $id;
    protected $username;
    protected $password;
    protected $permission_id;
    protected $created_at;
    protected $updated_at;
    
    public function setPassword(string $pass)
    {
        $this->password = password_hash($pass, PASSWORD_BCRYPT);
        
        return $this;
    }
    
    public function setCreatedAt(string $dateString)
    {
        $this->created_at = new \DateTime($datetime, new \DateTimeZone('UTC'));
        
        return $this;
    }
    
    public function getCreatedAt(string $format = 'Y-m-d H:i:s')
    {
        $timezone = isset($this->timezone)
        ? $this->timezone
        : app_timezone();
        
        $this->created_at->setTimezone($timezone);
        
        return $format === true
        ? $this->created_at
        : $this->created_at->format($format);
    }
}