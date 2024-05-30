<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $link1;
    public $link2;
    public $link3;
    public $link4;
    public $link5;
    public $text1;
    public $text2;
    public $text3;
    public $text4;
    public $text5;
    public $separator;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link1, $link2, $link3, $link4, $link5, $separator='bullet bg-gray-400 w-5px h-2px', $text1='Accueil', $text2='', $text3='', $text4='', $text5='')
    {
        $this->link1 = $link1;
        $this->link2 = $link2;
        $this->link3 = $link3;
        $this->link4 = $link4;
        $this->link5 = $link5;
        $this->separator = $separator;
        $this->text1 = $text1;
        $this->text2 = $text2;
        $this->text3 = $text3;
        $this->text4 = $text4;
        $this->text5 = $text5;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
