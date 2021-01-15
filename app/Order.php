<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $user_id
 * @property int $total_price
 * @property int $total_qty
 * @property string $phone
 * @property string $address
 * @property string $name
 * @property string $email
 * @property string $order_number
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends Model
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
    protected $fillable = ['user_id', 'total_price', 'total_qty', 'phone', 'address', 'name', 'email', 'order_number', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail','order_id','id');
    }

}
