<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    //

    public function index() {


        $contact_us_data = ContactUs::get();

        

        // 這裡的前端畫面放在
        // layouts裡面 所以寫
        // layouts裡面的 index

        return view('contact_us.index',compact('contact_us_data'));


    }

    public function create() {

        return view('contact_us.create');
    }

    // 送的資料存到 $request
    // 前端資料送到後端接收
    public function store(Request $request) {

    //     dd($request->all());

    //     $request->name;
    //     $request->phone;
    //     $request->email;
    //     $request->title;
    //     $request->content;


    //     第一種

    //    ContactUs::create([

    //         'name'=>$request->name,

    //         'phone'=>$request->phone,

    //         'email'=>$request->email,

    //         'title'=>$request->title,

    //         'content'=>$request->content,

    //     ]);


        // $request = ContactUs::get();

        // return $request;

    ContactUs::create($request->all());

    $request = ContactUs::get();

    return $request;

    }
}
