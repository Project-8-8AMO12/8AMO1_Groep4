<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActiviteitenController extends Controller
{
    public function index() {
        $pageID =2;

        $text = DB::table('pagina')->select('Titel','SubTitel','Tekst','Footer')->where('pageID',$pageID)->get();

        return view('activiteiten',['text'=>$text]);
    }

}




