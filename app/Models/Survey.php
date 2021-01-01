<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $guarded  = [];

    public function questionaire()
    {
    	return $this->belongsTo(Questionaire::class);
    }

    public function responses()
    {
    	retunr $this->hasMany(SurveyResponse::class);
    }
}
