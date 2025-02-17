<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AddButton extends Component
{
    public $link;
    public $text;
    public $name;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $text='Ajouter', $name='', $icon='bi bi-plus-circle-fill')
    {
        $this->link = $link;
        $this->text = $text;
        $this->name = $name;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.add-button');
    }
}
