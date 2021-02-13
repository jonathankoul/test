<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model for Addressee
 */

class Addressee extends Model
{

    /**
     * Attributes for the Addressee Model
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * Hide Timestamp variables from being displayed in JSON form (ID, created_at, updated_at)
     * @var array
     */
    protected $hidden = [];
}