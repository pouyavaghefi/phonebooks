<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhonebookCategory extends Model
{
    use HasFactory;

    protected $table = 'phonebook_categories';
    protected $guarded = [];

    public function phonebooks()
    {
        return $this->hasMany(Phonebook::class, 'phonebook_category_id');
    }
}
