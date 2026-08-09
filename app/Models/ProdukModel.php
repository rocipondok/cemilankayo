<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    
    protected $table = 'produk';
    protected $useTimestamps ='true'; 
    protected $allowedField = ['nmproduk','slug','hrgproduk','slugt'];
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at';

    
    
    
}