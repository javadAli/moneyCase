<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Book;
use \App\Models\Days;

class BookMonth extends Model
{
    use HasFactory;
    protected $table="bookmonths";
    protected $fillable=["book_bookSn", "NameMonth"];
    protected $primaryKey="BookMonthSn";

    public function book() {

       return  $this->belongTo(Book::class);

    }

    public function monthDays(){
       return  $this->hasMany(Days::class);
    }
    public $timestamps=false;
}
