<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BackButton extends Component
{
    public $link;
    public $text;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $text='Retour', $icon='bi bi-arrow-left-circle-fill')
    {
        $this->link = $link;
        $this->text = $text;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.back-button');
    }
}
