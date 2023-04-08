<?php
namespace App\Http\Controllers;

class HomeController extends Controller {

    public function home() {
        $nama =  "Ali bin Ali bin Ali";
        $alamat  = "Bagu";
        //return view('home.home', ["nama"=>$nama]);
        return view('home.home', compact("nama", "alamat"));
    }

}
