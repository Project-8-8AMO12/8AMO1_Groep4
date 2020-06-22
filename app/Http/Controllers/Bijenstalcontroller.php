<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Bijenstalcontroller extends Controller
{

    public  function index() {

        $pageID =4;



        $text = DB::table('pagina')->select('Titel','SubTitel','Tekst','Footer')->where('pageID',$pageID)->get();

        return view('Bijenstal',['text'=>$text]);

    }
}
