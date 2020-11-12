<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardModule extends Component
{
    public $iconClass, $title, $url, $bgColor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($iconClass, $title, $url, $bgColor = null)
    {
        $this->iconClass = $iconClass;
        $this->title = $title;
        $this->url = $url;
        $this->bgColor = $bgColor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-module');
    }
}
