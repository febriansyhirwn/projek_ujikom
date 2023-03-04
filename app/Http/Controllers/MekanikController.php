<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AppMode

class MekanikController extends Controller
{
    function ambil(){
        $mekanik['mekanik']=Mekanik::get();
        return view('mekanik.mekanik', $mekanik);
    }
    function tambah(){
        $member['member']=Member::get();
        $data=[
            'name'=>'',
            'alamat'=>'',
            'status_aktivitas'=>'',
            'member_id'=>'',
            'tombol'=>'simpan',
            'action'=>url('/mekanik/add')
        ];
        return view('mekanik.mekanikadd',$data,$member);
    }
    function add(Request $req){
        // return $req
        $data=[
            'name'=>$req->name,
            'alamat'=>$req->alamat,
            'status_aktivasi'=>$req->status_aktivasi,
            'member_id'=>'1',
        ];
        Mekanik::create($data);
        return redirect('/meber');
    }
}