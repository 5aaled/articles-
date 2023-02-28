<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $fillable = [
        "title","short_description","content","cover","category_id","user_id"
    ] ;
    public function user (){
        return $this->belongsTo(User::class);
    }
    public function category (){
        return $this->belongsTo(category::class);
    }
}
