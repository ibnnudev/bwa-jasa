<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThumbnailService extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'thumbnail_service';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service_id',
        'thumbnail',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // one to many

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
