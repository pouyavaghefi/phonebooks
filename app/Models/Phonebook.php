<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    use HasFactory;

    protected $table = 'phonebooks';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function category()
    {
        return $this->belongsTo(PhonebookCategory::class, 'phonebook_category_id');
    }
}
