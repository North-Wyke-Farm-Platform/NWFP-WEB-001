<?php
/**
 * The Tag model is a simple keyword.
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{

    public function pages(): BelongsToMany
        {
            return $this->belongsToMany(Page::class);
        }
    public function projects(): BelongsToMany
        {
            return $this->belongsToMany(Project::class);
        }
}
