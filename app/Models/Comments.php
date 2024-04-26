<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Days;

class Comments extends Model
{
    use HasFactory;
    protected $table="daycomments";
    protected $fillable=["comment", "days_daySn"];
    protected $primaryKey="DayCommentSn";

    public function monthDay() {
        
        return $this->belongTo(Days::class);

    }
    public $timestamps=false;
}
