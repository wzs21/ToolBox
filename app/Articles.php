<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articles extends Model
{
    //fillable : variable that is okay with
    //				Mass Asignment
    // basically we okay if user able to update that
    // in our database
    protected $fillable = [
    	'title',
    	'body',
        'user_id',
    	'published_at'

    ];

    protected $dates = ['published_at'];

    //scope
    // can be used anywhere in the apps
    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
    	$query->where('published_at', '>', Carbon::now());
    }

    //Mutator
    //Ejas data sebelum masuk database
    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    // An article is owned by a user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
