<?php

namespace App\Http\Controllers;


use App\NewsNews;
use App\NewsNewsType;
use Illuminate\Http\Request;

class NewsNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news_news = NewsNews::get();
        return view('admin.news_news.index',compact('news_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $news_news_types = NewsNewsType::get();
        return view('admin.news_news.create',compact('news_news_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        NewsNews::create($request->all());
        return redirect('/admin/news_news');
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
        $news_news = NewsNews::find($id);
        $news_news_types = NewsNewsType::get();

        return view('admin.news_news.edit',compact('news_news','news_news_types'));
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
        $news_news = NewsNews::find($id);
        $news_news->type_id = $request->type_id;
        $news_news->title = $request->title;
        $news_news->content = $request->content;
        $news_news->date = $request->date;
        $news_news->save();

        return redirect('/admin/news_news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news_news = NewsNews::find($id);
        $news_news->delete();
        return redirect('/admin/news_news');
    }

    public function news(){
        $newsData = NewsNews::get();
        return view('layout.template',compact('newsData'));
    }
}
