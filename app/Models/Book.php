<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User;
use BookMonth;

class Book extends Model
{
    use HasFactory;

    protected $fillable=["bookName", "description", "user_id"];
    protected $primaryKey="BookSn";

    public function user() {
        $this->belongTo(User::class);
    }

    public function bookMonths(){
        $this->hasMany(BookMonth::class);
    }
    public $timestamps=false;
}
