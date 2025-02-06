<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FamilyMemberData extends Model
{
    protected $fillable = [
        'health_survey_data_id',
        'name',
        'birthdate',
        'age',
        'sex',
        'education',
        'work',
        'other_information',
        'user_id'
    ];

    public function works(): BelongsTo
    {
        return $this->belongsTo(LivelihoodList::class,'work','id');
    }
}
