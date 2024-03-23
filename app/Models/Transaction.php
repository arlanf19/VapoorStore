<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'address',
        'payment',
        'total_price',
        'shipping_price',
        'status',
    ];

    public function Items(){
        return $this->hasMany(transactionItem::class, 'transactions_id', 'id');
    }

    public function user (){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
