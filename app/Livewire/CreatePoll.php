<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = [];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = $this->title;
    }

    public function removeOption($index)
    {
        unset($this->options[$index]);

        // Avoid empty elements and reindex
        $this->options = array_values($this->options);
    }
}
