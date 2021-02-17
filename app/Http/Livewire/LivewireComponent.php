<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LivewireComponent extends Component
{
    public $variable = 'Variable used in Livewire-Component';
    public $anotherVariable = 'Variable used in Jetstream-Component';

    public $showChild = false;

    public function child(){
        $this->showChild=true;
    }

    public function render()
    {
        return view('livewire.livewire-component');
    }
}
