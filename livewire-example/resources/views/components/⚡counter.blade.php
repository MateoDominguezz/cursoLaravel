<?php

use Livewire\Component;

new class extends Component
{
    public $count = 0;
    public $name = "";

    public function mount()
    {
        $this->count= 25;
    }

    public function incrementar()
    {
        $this->count += 1;
    }
};
?>

<div>
    <h2>{{$count}}</h2>
    <button wire:click = "incrementar"> Incrementar</button>

    <input type="text" wire:model.live="name"/>
    <h3>{{$name}}</h3>


</div>