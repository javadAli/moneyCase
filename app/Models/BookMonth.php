<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Book;
use Days;

class BookMonth extends Model
{
    use HasFactory;
    protected $table="bookmonths";
    protected $fillable=["books_bookSn", "NameMonth"];
    protected $primaryKey="BookMonthSn";

    public function book() {

        $this->belongTo(Book::class);

    }

    public function monthDays(){
        $this->hasMany(Days::class);
    }
    public $timestamps=false;
}
