<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index(){
        $jabatans = Jabatan::all();
       return view("jabatan.index",compact("jabatans"));
    }
}
