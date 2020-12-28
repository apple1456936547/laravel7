<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //


    }

    public function index() {

        #code...

        $news_data = DB::table('news')->get();



        return view('news',compact('news_data'));
    }

    public function detail() {

        #code...

        return view('news_detail');
    }
}
