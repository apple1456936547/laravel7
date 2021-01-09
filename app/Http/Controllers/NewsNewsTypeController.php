<?php

namespace App\Http\Controllers;

use App\NewsNewsType;
use Illuminate\Http\Request;

class NewsNewsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news_news_types = NewsNewsType::get();
        return view('admin.news_news_type.index',compact('news_news_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.news_news_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NewsNewsType::create($request->all());
        return redirect('/admin/news_news_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_news_type = NewsNewsType::find($id);
        return view('admin.news_news_type.edit',compact('news_news_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $news_news_type = NewsNewsType::find($id);
        $news_news_type->name = $request->name;
        $news_news_type->save();
        return redirect('/admin/news_news_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news_news_type = NewsNewsType::find($id);
        $news_news_type->delete();
        return redirect('/admin/news_news_type');
    }
}
