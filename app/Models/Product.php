<?php

namespace App\Models;

use App\Models\Users\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'category',
        'description',
        'price',
        'quantity',
        'pre_order',
        'condition',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
