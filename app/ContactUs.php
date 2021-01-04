<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{

    // 跟表格建立聯繫
    protected $table ='contact_us';

    // 取得資料
    protected $fillable = ['name','phone','email','title','content'];
}
