<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Blog extends Model
{
    
    use SoftDeletes;

    protected $fillable = [
        "title",
        "sub_title",
        "author",
        "publish_date",
        "body",
        "image",
        "is_published"
    ];

    protected $dates = [
        "publish_date",
        "deleted_at"
    ];

    protected static function boot()
    {
        parent::boot();

        // static::addGlobalScope('filterPublish', function (Builder $builder) {
        //     $builder->where('is_published', '==', 1);
        // });

    }

}
