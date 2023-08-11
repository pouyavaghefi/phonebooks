<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PhonebookContactsLinks2 extends Component
{
    public $contact;

    /**
     * Create a new component instance.
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('components.phonebook-contacts-links2');
    }
}
