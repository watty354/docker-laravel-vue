<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class text extends Model
{
    //テーブル名
    protected $table = 'text';
    protected $fillable =
    [
        'text',
        'sentence_id',
        'show_id',
    ];
}


