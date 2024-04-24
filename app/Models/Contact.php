<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_num',
        'name',
        'subject',
        'phone',
        'message',
        'email',
        'status',
        'user_id'
    ];


}
