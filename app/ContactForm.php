<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactForm extends Model
{
    use SoftDeletes;
    // Opton 1
//    protected $fillable = [
//        'first_name', 'email', 'password',
//        'suburb_id'
//    ];

    // Option 2
    protected $guarded = [];

}
