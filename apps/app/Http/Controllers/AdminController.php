<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Konfirmasi;
use App\Lunas;
use App\Peserta;

class AdminController extends Controller
{
    public function viewHome(){
        return view('home');
    }

    public function daftar(Request $request){
         
        $last_pin = Lunas::all('pin')->sortByDesc('pin')->first();
        $pin_num = substr($last_pin->pin, 4, 5);
        $pin_inc = (int)$pin_num;
        
        $last_pin2 = Peserta::all('pin')->sortByDesc('pin')->first();
        $pin_num2 = substr($last_pin2->pin, 4, 5);
        $pin_inc2 = (int)$pin_num2;
        
        if($pin_inc > $pin_inc2){
            $pin_inc = $pin_inc; 
        }else{
            $pin_inc = $pin_inc2;
        }

        $pin_inc += 1;
        $pin = "FIKT0" . $pin_inc;

        if($request->jenis_acara == "WORKSHOP FOOD PHOTOGRAPHY"){
            $peserta = new Peserta;
        }else{
            $peserta = new Lunas;
        }

        $peserta->pin = $pin;
        $peserta->name = $request->nama;
        $peserta->email = $request->email;
        $peserta->telp = $request->telp;
        $peserta->kategori = null;
        $peserta->jenis_acara = $request->jenis_acara;
        $peserta->nim = null;
        $peserta->progdi = null;
        $peserta->alamat = null;

        if($peserta->save()){
            Session::flash('berhasil', '1');
            return redirect('http://hmti.dinus.ac.id/semnasti/Getqrcode/getQR/' . $pin);
        }else{
            Session::flash('gagal', '1');
            return redirect(url('/'));
        }
    }
}
