<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function addComment($body)
	{
		$this->comments()->create(compact('body'));
	}

	public static function filter()
	{
		$posts = \App\Post::latest();

		if($month = request('month')){
			$posts->whereMonth('created_at', Carbon::parse($month)->month);
		}

		if($year = request('year')){
			$posts->whereYear('created_at', $year);
		}

		return $posts;
	}

	public static function archives()
	{
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                ->groupBy('year', 'month') 
                ->orderByRaw('min(created_at) desc')
                ->get()
                ->toArray();
	}
}
