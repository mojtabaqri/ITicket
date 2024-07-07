<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServiceCategory extends Model
{
    protected $table='service_category';
    use HasFactory;

    /* ServiceCategory

           id: id foreign:Services.service_category_id
           name: string
           description: bigInteger
           parent_id: bigInteger

     */
    protected $fillable = [
        'name',
        'description',
        'parent_id',
    ];

    public function services (): BelongsTo
    {
        return $this->belongsTo(Service::class,'parent_id');
    }

    // رابطه برای گرفتن دسته‌های فرزند
    public function children(): HasMany
    {
        return $this->hasMany(ServiceCategory::class, 'parent_id');
    }

    // رابطه برای گرفتن دسته‌ی والد
    public function parent(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'parent_id');
    }



}
