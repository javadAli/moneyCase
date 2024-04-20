<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User;
use Worker;

class Work extends Model
{
    use HasFactory;
    protected $fillable=[ "workName", "description", "userSn", "startDate", "endDate"];
    protected $primaryKey="workId";
    public $timestamps=false;

    public function user() {

        $this->belongTo(User::class);

    }

    public function workers() {

        $this->hasMany(Worker::class);

    }
}
