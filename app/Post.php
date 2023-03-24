<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    public function getPhoto()
    {
        return $this->hasMany('App\Photo',"post_id");
    }

    public function getCategory()
    {
        return $this->belongsTo('App\Category',"category_id");
    }
    public function getRating()
    {
        return $this->hasMany('App\Rating',"post_id");
    }
    public function getViewer()
    {
        return $this->hasMany('App\Viewer',"post_id");
    }
    public function getComment()
    {
        return $this->hasMany('App\Comment',"post_id");
    }
    public function categories(){
        return $this->belongsToMany(Category::class, 'post_categories');
    }
}
