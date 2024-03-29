<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tweet extends Model
{
    protected $guarded = [] ;

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
