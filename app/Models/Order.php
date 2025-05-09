<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable=[
        'Status',
        'User_ID',
        'Customer_ID'
    ];
}
