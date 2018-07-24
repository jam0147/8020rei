<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sended extends Model
{
    protected $fillable = ['phone_number','body','status','template_id','message_id'];
}
