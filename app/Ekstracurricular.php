<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ekstracurricular extends Model
{
	use SoftDeletes;

    protected $guarded = [''];
    protected $dates=['deleted_at'];
}
