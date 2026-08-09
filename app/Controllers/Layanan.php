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
    //    $tokoModel = new TokoModel();
      //  $data = [
      //    'toko'=> $tokoModel->findAll()
      //   ];
       
        return view('layanan',$data);        
    }
  
    // public function detail($slugt)
    // {
    //   // //  $produkModel = new ProdukModel();
    //   // // $produk = $produkModel->where('slugt',$slugt)->findAll();
    //   // // $tokoModel = new TokoModel();
    //   // // $data = [
    //   // //   'produk' => $produk ,
    //   // //   'slugt' => $slugt,
    //   // //   'toko'=> $tokoModel->where('slugt',$slugt)->findAll()
    //   //  ];

    


        //  return view('produk',$data);   

    // }
  
}
