<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
    $data = [
        'judul' => 'Situs Resmi Cemilan Kayo'
        ]; 
       
        return view('beranda',$data);
        }
}