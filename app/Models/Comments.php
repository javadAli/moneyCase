<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Days;

class Comments extends Model
{
    use HasFactory;
    protected $table="daycomments";
    protected $fillable=["comment", "SnDay"];
    protected $primaryKey="DayCommentSn";

    public function monthDay() {
        
        $this->belongTo(Days::class);

    }
    public $timestamps=false;
}
