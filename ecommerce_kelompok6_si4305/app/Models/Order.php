<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table  = 'orders';
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'alamat',
        'kota',
        'kecamatan',
        'kode_pos',
        'kode_pin',
        'status',
        'image',
        'resi',
        'message',
        'tracking_no',
    ];

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
