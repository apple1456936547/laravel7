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

    public function create() {

        // DB::table('news')->insert(
        //     [
        //         'title' => '第一個標題',
        //         'date' => '2020-12-30',
        //         'content' => '拉拉拉拉拉拉',
        //         'img' => 'https://miro.medium.com/max/1134/1*jh8J9wJVzbcsdyscc6WsfQ.jpeg',

        //     ]
        // );

        // return "success";

        // DB::table('news')->delete(['id' => 8]);

        // DB::table('news')->update(['id' => 1]);

        return "update success";
    }
}
