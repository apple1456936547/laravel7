<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class ProductType extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function products()
    {
        // 一對多 (類別對產品)
        // ('App\Model名稱','另一張表與自己關聯的欄位','自己這張表要與對方關聯的欄位');
        return $this->hasMany('App\Product','type_id','id');
    }

}
