<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Title extends Component
{
    public $pageTitle;
    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageTitle='', $class='page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0')
    {
        $this->pageTitle = $pageTitle;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.title');
    }
}
