<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Annonce extends Model
{
    use Notifiable;

    protected $guarded = [];

    public function region()
    {
    	return $this->belongsTo(Region::class);
    }

     public function identite()
    {
    	return $this->belongsTo(Identite::class);
    }

     public function type()
    {
    	return $this->belongsTo(Type::class);
    }

     public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function path()
    {
        return url("/annonces/{$this->id}-".Str::slug($this->title));
    }

    public static function image($fileName,$annonce)
    {
       if (request()->hasfile($fileName)) {
            $file = request()->file($fileName);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image/products/', $filename);
            $annonce->image = $filename;
         }
    }

    public static function photo($fileName,$annonce)
    {
       if (request()->hasfile($fileName)) {
            $file = request()->file($fileName);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image/photos/', $filename);
            $annonce->photo = $filename;
         }
    }

    public static function media($fileName,$annonce)
    {
       if (request()->hasfile($fileName)) {
            $file = request()->file($fileName);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image/medias/', $filename);
            $annonce->media = $filename;
         }
    }

    public static function upload($fileName,$annonce)
    {
       if (request()->hasfile($fileName)) {
            $file = request()->file($fileName);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image/uploads/', $filename);
            $annonce->upload = $filename;
         }
    }

    public static function fichier($fileName,$annonce)
    {
       if (request()->hasfile($fileName)) {
            $file = request()->file($fileName);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image/fichiers/', $filename);
            $annonce->fichier = $filename;
         }
    }


}
