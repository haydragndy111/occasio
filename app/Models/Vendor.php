<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'company_category_id',
        'rating',
    ];

    // public function user(): BelongsTo {
    //     return $this->belongsTo(User::class);
    // }

    // public function category(): BelongsTo {
    //     return $this->belongsTo(CompanyCategory::class, 'company_category_id');
    // }
}
