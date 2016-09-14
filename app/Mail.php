<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = ['sender_id', 'receiver_id' , 'body', 'sent_at'];
    public $timestamps = false;

    public function sender() {
        return $this->belongsTo('App\User', 'sender_id');
    }
    public function receiver() {
        return $this->belongsTo('App\User', 'receiver_id');
    }
}
