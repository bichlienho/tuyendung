<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'logo',
        'email',
        'phone',
        'address',
        'size',
        'industry',
        'description',
        'website',
        'is_verified',
        'is_pro',
        'is_featured',
    ];

    protected $casts = [
        'is_verified' => 'boolean',
        'is_pro' => 'boolean',
        'is_featured' => 'boolean',
    ];

    //  Quan hệ: 1 công ty có nhiều việc làm
    public function jobs()
    {
        return $this->hasMany(Vieclam::class, 'company_id');
    }

    // Getter: Số lượng việc làm đang mở
    public function getJobCountAttribute()
    {
        return $this->jobs()->where('is_active', true)->count();
    }
}
