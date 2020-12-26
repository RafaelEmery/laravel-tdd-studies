<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    protected $fillable = ['title', 'agency', 'account_number', 'balance', 'balance_initial', 'bank_id', 'bank_image'];

    public function bank()
    {
        return $this->belongsTo('App\Bank');
    }
}
