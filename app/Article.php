<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    protected $fillable = ['name','body','status','published_date']

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function multimediaArticles()
    {
        return $this->hasMany('App\MultimediaArticle');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
