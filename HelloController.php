<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //ini tampilan function index 
    public function index()
    {
    //echo "<h1>Hello World, Dari Controller!!</h1>";
    //$nama = "Nanda Aulia";
    // $pelajaran =["Pwpb","Algoritma","PemDas","Basis Data","PBO"];
    // return view('hello.index',compact('nama','pelajaran'));
    
    //$nama = "Nanda Aulia";
    //$pelajaran =["Pwpb","Algoritma","PemDas","Basis Data","PBO"];
    //return view('hello.index',('nama'=>$nama,'pelajaran'=>$pelajaran));
    
    $d['nama'] = "Nanda Aulia";
    $d['pelajaran']=["Pwpb","Algoritma","PemDas","Basis Data","PBO"];
    return view('hello.index',$d);
}
}