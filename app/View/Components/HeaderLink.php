<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $routeName
     * @param string $text
     */
    public function __construct(
        public string $routeName,
        public string $text
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-link');
    }
}
