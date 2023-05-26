<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Types extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'specializationId'
    ];

    public function treatmets(): HasMany
    {
        return $this->hasMany(Treatments::class, 'typeId');
    }

    public function specializations(): BelongsTo
    {
        return $this->belongsTo(Specializations::class, "specializationId");
    }
}
