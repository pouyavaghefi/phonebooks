<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PhonebookContactsLinks extends Component
{
    public $phonebook;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $phonebook
     * @return void
     */
    public function __construct($phonebook)
    {
        $this->phonebook = $phonebook;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.phonebook-contacts-links');
    }
}
