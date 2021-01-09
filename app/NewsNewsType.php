<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsNewsType extends Model
{
    protected $table = 'news_news_types';
    protected $fillable = ['name'];

    public function newsnews()
    {
        // 一對多 (類別對產品)
        // ('App\Model名稱','另一張表與自己關聯的欄位','自己這張表要與對方關聯的欄位');
        return $this->hasMany('App\NewsNews','type_id','id');
    }

}
