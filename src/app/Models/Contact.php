<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'last-name',
        'first-name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
