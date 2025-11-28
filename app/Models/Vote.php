<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    protected $table = 'votes';

    public $timestamps = false;

    public function option(): BelongsTo
    {
        return $this->belongsTo(Option::class);
    }
}
