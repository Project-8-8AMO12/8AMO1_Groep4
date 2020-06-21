<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NieuwsController extends Controller
{
    public  function index() {

        $pageID =3;



        $text = DB::table('pagina')->select('Titel','SubTitel','Tekst','Footer')->where('pageID',$pageID)->get();

        return view('Nieuws',['text'=>$text]);

    }
}
