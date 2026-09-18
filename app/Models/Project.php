<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    public function data(): BelongsToMany
        {
            return $this->belongsToMany(Data::class);
        }
    public function themes(): BelongsToMany
        {
            return $this->belongsToMany(Theme::class);
        }
    public function tags(): BelongsToMany
        {
            return $this->belongsToMany(Tag::class);
        }

    public function students(): BelongsToMany
        {
            return $this->belongsToMany(Student::class);
        }
}
