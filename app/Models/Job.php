<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_postings';

    protected $fillable = [
        'title',
        'company',
        'description',
        'qualifications',
        'location',
        'job_type',
        'posted_date',
        'department',
        'experience',
        'contact_email',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'posted_date' => 'date',
            'status' => 'boolean',
        ];
    }

    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }
}
