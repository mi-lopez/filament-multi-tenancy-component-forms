<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'name', 'phone'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
