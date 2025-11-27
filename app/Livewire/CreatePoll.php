<?php

namespace App\Livewire;

use App\Models\Option;
use App\Models\Poll;
use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = [''];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = '';
    }

    public function removeOption($index)
    {
        unset($this->options[$index]);

        // Avoid empty elements and reindex
        $this->options = array_values($this->options);
    }

    public function createPoll()
    {
        $poll = Poll::create([
            'title' => $this->title
        ]);

        // Create options in db
        foreach($this->options as $option) {
            $option = Option::create([
                'name' => $option,
                'poll_id' => $poll->id
            ]);
        }

        $this->reset(['title', 'options']);
    }
}
