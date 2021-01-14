<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function questionaire()
    {
    	return $this->belongsTo(Questionaire::class);
    }

	public function answers()
    {
    	return $this->hasMany(Answer::class );
    }

    public function responses()
    {
        return $this->hasMany(SurveyResponse::class );
    }

}
