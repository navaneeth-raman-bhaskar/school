<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Gender extends Component
{
    public array $genders;

    public function __construct(public $model,public string $name = "gender")
    {
        $this->genders = \App\Services\Gender::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gender');
    }
}
