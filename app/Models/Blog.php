<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = ['tags'=>'json'];

    public function created_by()                         //user admin relationship
    {
        return $this->hasOne(User::class,"id","created_by_id");
    }

    public function category() {
        return $this->belongsTo(Category::class); // don't forget to add your full namespace
    }
}
