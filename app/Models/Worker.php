<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\MonthDays;
use \App\Models\Work;

class Worker extends Model
{
    use HasFactory;

    protected $fillable=["workerName", "description", "work_workId", "TimeStamp"];
    protected $primaryKey="workerId";
    public $timestamps=false;

    public function monthDays() {

        return $this->hasMany(MonthDays::class);

    }

    public function work(){

        return $this->belongTo(Work::class);
        
    }
}
