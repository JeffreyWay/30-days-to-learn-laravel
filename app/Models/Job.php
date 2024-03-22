<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}
