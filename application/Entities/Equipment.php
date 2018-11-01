<?php namespace App\Entities;

use CodeIgniter\Entity;

class Equipment extends Entity
{ 
    protected $id;
    protected $remark;
    protected $equipment_name;
    protected $equipment_detail;
    protected $equipment_img;
    protected $created_by;
    protected $created_at;
    protected $updated_at;
}