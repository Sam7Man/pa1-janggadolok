<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use Commentable;

    protected $table = 'post';
}