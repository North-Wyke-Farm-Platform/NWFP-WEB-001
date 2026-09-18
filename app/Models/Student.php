<?php

namespace App\Models;
use App\Models\Organisation;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public function organisation() {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
