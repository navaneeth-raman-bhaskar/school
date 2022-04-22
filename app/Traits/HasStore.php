<?php


namespace App\Traits;


use Illuminate\Http\Request;

trait HasStore
{
    public function store(Request $request)
    {
        return tap($this)->fill($request->only($this->fillable))->save();
    }
}
