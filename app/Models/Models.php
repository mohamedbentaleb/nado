<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Models extends Model
{
    use HasFactory, SoftDeletes;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [ 'name', 'brand_id', 'ip', 'user_agent', 'user_id' ];

    public function brand(){
        return $this->belongsTo('App\Models\Brands');
     }
}
