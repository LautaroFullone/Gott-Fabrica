<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function showIndex(){
        return view('frontend.index');
    }
    public function showTienda(){
        return view('frontend.shop-index');
    }
    public function showEmpresarios(){
        return view('frontend.empresarios');
    }
    public function showProfecionales(){
        return view('frontend.profesionales');
    }
    public function showNovedades(){
        return view('frontend.novedades');
    }
    public function showNovedadesDetalle($id){
        $id='hola';
        return view('frontend.novedades-detail');
    }
    public function showPageNotFound(){
        return view('frontend.pageNotFound');
    }
    public function showCookie(){
        return view('frontend.cookies');
    }
    public function protect(){
        return view('frontend.protect');
    }
    public function terminos(){
        return view('frontend.terminos');
    }
    public function terminado(){
        return view('frontend.terminado');
    }


}
