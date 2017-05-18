<?php

namespace App;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $dates = ['published_at'];
    protected $fillable = ['title', 'content'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }

    public function getDestinationPath(){
        return "uploads/posts/$this->id";
    }

    public function getImagePath(){
        return "/{$this->getDestinationPath()}/$this->file_name";
    }

    public function saveImage($file){
        if($this->id) $this->save();
        if(!empty($file)){
            $this->file_name = $file->getClientOriginalName();
            $this->resizeImage($file);
        }
        return $this;
    }

    public function resizeImage($file){
        Image::configure(array('driver' => 'imagick'));
        Image::make($file)
            ->fit(669, 320)
            ->move($this->getDestinationPath(), "thumb_{$file->getClientOriginalName()}");
    }


}
