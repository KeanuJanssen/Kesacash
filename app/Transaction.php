<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'description', 'negative', 'amount'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
