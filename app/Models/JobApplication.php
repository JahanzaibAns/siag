<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'subject',
        'cv_path',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    /**
     * Check if CV file exists.
     */
    public function hasCv(): bool
    {
        if (! $this->cv_path) {
            return false;
        }

        return Storage::disk('public')->exists($this->cv_path);
    }

    /**
     * Get the full path to the CV file.
     */
    public function getCvPath(): ?string
    {
        if (! $this->hasCv()) {
            return null;
        }

        return storage_path('app/public/'.$this->cv_path);
    }
}
