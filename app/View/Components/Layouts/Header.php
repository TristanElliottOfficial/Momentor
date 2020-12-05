<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Header extends Component
{
    public $page_title;
    public $page_meta;
    public $page_button;
    public $page_button_link;
    public $page_button_text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->page_title = $page_title;
        $this->page_meta = $page_meta;
        $this->page_button = $page_button;
        $this->page_button_link = $page_button_link;
        $this->page_button_text = $page_button_text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layouts.header');
    }
}
