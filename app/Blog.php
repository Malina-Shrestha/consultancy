<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = ['title','slug','description','published','published_by','thumbnail','meta_title','meta_description','views'];

    public function publisher(){
        return $this->hasOne('App\Admin','id','published_by');
    }
}
