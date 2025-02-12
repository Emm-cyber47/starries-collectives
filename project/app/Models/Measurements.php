<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Measurements extends Model
{
    use HasFactory;

    protected $table= 'Measurements';

    protected  $fillable = [
        'fullname',
        'email',
        'phonenumber',
        'shippingaddress',
        'garment',
        'style',
        'fabric',
        'color',
        'measurement',
        'specialrequest',
        'date',
        'budget',
        'image',
    ]; 
}
