<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\BookMonth;
use \App\Models\Comments;

class Days extends Model
{
    use HasFactory;
    protected $fillable=["dayName", "InAmount", "OutAmount", "bookmonths_bookMonthSn"];
    protected $primaryKey="daySn";
    public function bookMonth(){

        return $this->belongTo(BookMonth::class);

    }

    public function comments(){

        return $this->hasMany(Comments::class);
        
    }
    public $timestamps=false;
}
