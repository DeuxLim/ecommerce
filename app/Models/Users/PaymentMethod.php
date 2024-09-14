<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\User;

class PaymentMethod extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'card_type',
        'card_last_four',
        'provider',
        'payment_method_token',
        'is_default',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
