<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MonthDays;
use Work;

class Worker extends Model
{
    use HasFactory;

    protected $fillable=["workerName", "description", "work_workId", "TimeStamp"];
    protected $primaryKey="WorkerId";
    public $timestamps=false;

    public function monthDays() {

        $this->hasMany(MonthDays::class);

    }

    public function work(){

        $this->belongTo(Work::class);
        
    }
}
