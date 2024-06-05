<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'nim',
        'visi',
        'misi',
        'gambar',
        'selected_by',
    ];

    /**
     * Get the user that selected this candidate.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'selected_by');
    }
}
