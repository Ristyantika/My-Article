<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_article extends Model
{
    //
    protected $table = 'add_articles';
    protected $primaryKey = 'id_article';
    protected $fillable = [
   		'image_article', 'title_article', 'category_article', 'description_article', 'id_user',
    ];

    public function user(){
    	return $this->belongsTo('app/User', 'id_user');
    }
}
