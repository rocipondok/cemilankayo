<?php

namespace App\Controllers;

class Portofolio extends BaseController
{
    public function index(): string
    { 
        $data = [
        'judul' => 'Portofolio'
        ]; 
        return view('portofolio',$data);
    }
}
