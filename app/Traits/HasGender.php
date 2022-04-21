<?php


namespace App\Traits;


use App\Services\Gender;
use Illuminate\Database\Eloquent\Casts\Attribute;


trait HasGender
{
   /* public function gender(): ?string
    {
        return Gender::name($this->gender);
    }

    public function genderName(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->gender()
        )->shouldCache();
    }*/
}
