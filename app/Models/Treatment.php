<?php

namespace App\Models;

use App\Casts\MoneyCast;
use App\Models\Scopes\TenancyScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ScopedBy([TenancyScope::class])]
class Treatment extends Model
{
    use HasFactory;

    protected $casts = [
        'price' => MoneyCast::class,
    ];
    protected $fillable = ['description', 'notes', 'patient_id', 'price', 'company_id'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
