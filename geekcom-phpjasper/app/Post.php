<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
    use LogsActivity;

    protected $fillable = [ 'title', 'content' ];

    protected static $logAttributes = [ 'title', 'content' ];
}
