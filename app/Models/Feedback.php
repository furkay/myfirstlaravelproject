<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedbacks";
    protected $fillable = ["fname","email","subject","bolum","message"];
}
