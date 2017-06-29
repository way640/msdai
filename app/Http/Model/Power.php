<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    protected $table = 'privilege';
    protected $primaryKey = 'priv_id';
    public $timestamps =false;
    protected $guarded = [];
}

