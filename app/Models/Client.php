<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded;

    protected $guard="client";

    protected $table='clients';


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
