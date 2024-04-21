<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    use HasFactory;
    protected $table="days";
    protected $fillable=["dayName", "InAmount", "OutAmount", "SnBookMonth"];
    protected $primaryKey="daySn";
    public function bookMonth(){

        $this->belongTo(BookMonth::class);

    }

    public function comments(){

        $this->hasMany(Comments::class);
        
    }
    public $timestamps=false;
}
