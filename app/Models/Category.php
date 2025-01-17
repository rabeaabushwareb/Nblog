<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract
{
    use Translatable ,HasEagerLimit;
    use HasFactory ,SoftDeletes;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['id', 'image' , 'parent', 'created_at', 'updated_at', 'deleted_at'];

    public function parents(){
        return $this->belongsTo(Category::class,'parent');
    }

    public function children(){
        return $this->hasMany(Category::class,'parent');
    }
    public function posts()
    {
       return $this->hasMany(Post::class);
    }
}
