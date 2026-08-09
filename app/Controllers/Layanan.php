<?php

namespace App\Controllers;
use App\Models\TokoModel;
use App\Models\ProdukModel;
class Layanan extends BaseController
{
    public function index(): string
    {
         $data = [
        'judul' => 'Layanan'
        ]; 
       $tokoModel = new TokoModel();
       $data = [
         'namatoko'=> $tokoModel->findAll()
        ];
       
        return view('layanan',$data);        
    }
  
    public function detail($slug)
    {
       $produkModel = new ProdukModel();
      $produk = $produkModel->where('slug',$slug)->findAll();
      $tokoModel = new TokoModel();
      $data = [
        'namabrg' => $namabrg,
        'slug' => $slug,
        'namatoko'=> $tokoModel->where('slugt',$slugt)->findAll()
       ];
    
         return view('produk',$data);   

    }
  
}
