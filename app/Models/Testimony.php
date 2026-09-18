<?php

namespace App\Models;
use App\Models\Project;
use App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    public function student() {
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
