<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $dateFormat = 'U';

    protected $casts = [
        'setting'=>'array',
        'create_time'=>'datetime:Y-m-d H:i:s',
        'update_time'=>'datetime:Y-m-d H:i:s',
    ];
}
