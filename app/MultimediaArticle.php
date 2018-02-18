<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultimediaArticle extends Model
{
    //
    protected $table = 'multimedia_articles';

    protected $fillable = ['path','type']

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
