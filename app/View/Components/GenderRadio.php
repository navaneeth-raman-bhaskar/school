<?php

namespace App\View\Components;

use App\Services\Gender;
use Illuminate\View\Component;

class GenderRadio extends Component
{
    public array $genders;
    public ?int $current;

    public function __construct($model, public string $name = "gender")
    {
        $this->genders = Gender::all();
        $this->current = $model->gender;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gender-radio');
    }
}
