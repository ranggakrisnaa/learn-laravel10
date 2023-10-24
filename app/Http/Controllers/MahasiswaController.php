<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public $data =  ['Toni Sans', 'Ayam Kijang', 'ayam ayama', 'nasi padang'];
    public function index() {
        return view('mahasiswa.index', ['mahasiswa' => $this->data]);
    }
    
}
