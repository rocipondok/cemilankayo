<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    
    protected $table = 'tabeltoko';
    protected $useTimestamps ='true'; 
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at';

}