<?php


namespace App\Traits\Model;


use Illuminate\Support\Str;

trait UseStorage
{
    public function getStoragePathAttribute()
    {
        if (isset(static::$storagePath)) {
            return static::$storagePath;
        }
        return Str::kebab(class_basename(__CLASS__));
    }
}