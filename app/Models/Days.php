<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    use HasFactory;
    protected $fillable=["dayName", "InAmount", "OutAmount", "bookmonths_bookMonthSn"];
    protected $primaryKey="daySn";
    public function bookMonth(){

        $this->belongTo(BookMonth::class);

    }

    public function comments(){

        $this->hasMany(Comments::class);
        
    }
    public $timestamps=false;
}
