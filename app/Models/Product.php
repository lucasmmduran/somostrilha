<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory, HasImage;

	protected $fillable = [
		'title',
		'slug',
		'description',
		'image',
		'status'
	];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function getImagePathAttribute()
	{
		if ($this->image) {
			return config('app.url') . "/storage/" . $this->image;
		}
	}

	public function getImagePath707x385Attribute()
	{
		if ($this->image) {
			$extension = substr($this->image, -4);
			$image = str_replace($extension, "_707x385$extension", $this->image);
			return config('app.url') . "/storage/" . $image;
		}
	}
}
