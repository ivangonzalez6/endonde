<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['user_id,
    businessName, businessAddress, businessCity, businessState, businessWhatsapp, businessFacebook, businessInstagram, shopImage'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
