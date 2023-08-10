<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $guarded = [];

    public function phonebook()
    {
        return $this->belongsTo(Phonebook::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function emails()
    {
        return $this->hasMany(Email::class);
    }

    public function numbers()
    {
        return $this->hasMany(Number::class);
    }
}
