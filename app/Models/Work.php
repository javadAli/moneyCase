<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\User;
use \App\Models\Worker;

class Work extends Model
{
    use HasFactory;
    protected $table="works";
    protected $fillable=[ "workName", "description", "user_id", "startDate", "endDate"];
    protected $primaryKey="workId";
    public $timestamps=false;

    public function user() {

      return  $this->belongTo(User::class);

    }

    public function workers() {

      return $this->hasMany(Worker::class);

    }
}
