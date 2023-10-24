<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    function index(){
        echo "ini function index";
    }
    function list(){
        echo "ini function list piw piw";
    }
    function create(){
        return view('Prodi.create');
    }
    function save(){
        echo 'data berhasil disimpan';
    }
}
