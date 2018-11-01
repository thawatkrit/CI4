<?php namespace App\Entities;

use CodeIgniter\Entity;

class Incident extends Entity
{
    protected $id;
    protected $remark;
    protected $Incident_tital;
    protected $Incident_detail;
    protected $Incident_status;
    protected $equipment_id;
    protected $created_by;
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