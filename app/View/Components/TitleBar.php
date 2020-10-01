<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TitleBar extends Component
{
    public $title;
    public $backUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $backUrl = null)
    {
        $this->title = $title;
        $this->backUrl = $backUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.title-bar');
    }
}
