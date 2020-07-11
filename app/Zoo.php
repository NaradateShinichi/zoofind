<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zoo extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
    
    public function user()
    {
      return $this->belongsTo('App\User');
    }
    
    public function histories()
    {
      return $this->hasMany('App\History');
    }
}
