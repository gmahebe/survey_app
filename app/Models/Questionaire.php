<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions ()
    {
    	return 	$this->hasMany(Question::class);
    }

    public function answers ()
    {
        return  $this->hasMany(Answer::class);
    }    

    public function surveys()
    {
        return $this->hasMany(Surveys::class);
    }

}
