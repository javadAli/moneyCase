<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\User;
use \App\Models\BookMonth;

class Book extends Model
{
    use HasFactory;

    protected $fillable=["bookName", "description", "user_id"];
    protected $primaryKey="BookSn";

    public function user() {
       return  $this->belongTo(User::class);
    }

    public function bookMonths(){
      return   $this->hasMany(BookMonth::class);
    }
    public $timestamps=false;
}
