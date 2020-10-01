<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HealthItem extends Component
{
    public $url, $imgSrc, $title, $description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $imgSrc, $title, $description)
    {
        $this->url = $url;
        $this->imgSrc = $imgSrc;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.health-item');
    }
}
