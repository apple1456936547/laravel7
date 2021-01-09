<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsNews extends Model
{
    protected $table = 'news_news';
    protected $fillable = ['type_id','title','content','date'];

    public function newsnewsType()
    {
        return $this->hasOne('App\NewsNewsType','id','type_id');
    }
}
