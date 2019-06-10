<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\FilterUpdatedAt;

class Postttttt extends Model
{
    use SoftDeletes;
    
    protected $table = "posts";

    protected $fillable = [
        "name",
        "description",
        "is_published"
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new FilterUpdatedAt);

        static::addGlobalScope('filterUpdatedAt', function (Builder $builder) {
            $builder->where('updated_at', '!=', null);
        });

    }

}
