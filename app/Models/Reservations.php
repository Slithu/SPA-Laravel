<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reservations extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userId',
        'employeeId',
        'treatmentId',
        'datetime',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "userId");
    }

    public function employees(): BelongsTo
    {
        return $this->belongsTo(Employees::class, "employeeId");
    }

    public function treatments(): BelongsTo
    {
        return $this->belongsTo(Treatments::class, "treatmentId");
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(reservations::class);
    }

    public function hasType(): bool
    {
        return !is_null($this->type);
    }
}
