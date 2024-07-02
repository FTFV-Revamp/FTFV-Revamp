<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $fillable = [
        'longname',
        'province_id',
        'latitude',
        'longitude',
        'baidu',
        'image_url',
        'type',
        'created_at',
        'updated_at',
    ];
    public $timestamps = true;
}
