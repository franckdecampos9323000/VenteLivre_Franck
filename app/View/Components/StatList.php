<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatList extends Component
{
    public $icon1;
    public $texticon1;
    public $text1;
    public $icon2;
    public $texticon2;
    public $text2;
    public $icon3;
    public $texticon3;
    public $text3;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon1='', $texticon1='', $text1='', $icon2='', $text2='', $texticon2='', $icon3='', $texticon3='', $text3='')
    {
        $this->icon1 = $icon1;
        $this->text1 = $text1;
        $this->texticon1 = $texticon1;
        $this->icon2 = $icon2;
        $this->text2 = $text2;
        $this->texticon2 = $texticon2;
        $this->icon3 = $icon3;
        $this->text3 = $text3;
        $this->texticon3 = $texticon3;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.stat-list');
    }
}
