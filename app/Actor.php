<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

    use Searchable;
    protected $table = 'actor';
    protected $primaryKey = 'actor_id';
}
