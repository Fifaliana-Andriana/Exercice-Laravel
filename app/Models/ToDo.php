<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ToDo extends Model
{
    use HasUuids;
    public $increments= false;
    protected $keyType = "string";
}
