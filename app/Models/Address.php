<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'street',
        'city',
        'province',
        'country',
        'postal_code',
    ];

    /**
     * Eloquent relationships
     */
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
