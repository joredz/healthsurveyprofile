<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TempFamilyMembers extends Model
{
    protected $fillable = [
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
