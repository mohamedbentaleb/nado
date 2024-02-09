<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class Brands extends Model
{
    use HasFactory, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'name', 'logo', 'ip', 'user_agent', 'user_id'  ];

    public function models()
    {
        return $this->hasMany('App\Models\Models');
    }

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brands::class);
    }

    public function getSlug(): string
    {
        return Str::slug($this->title);
    }

}
