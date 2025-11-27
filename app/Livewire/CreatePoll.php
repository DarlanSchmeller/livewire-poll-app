<?php

namespace App\Livewire;

use App\Models\Option;
use App\Models\Poll;
use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = [''];

    protected $rules = [
        'title' => 'required|min:3|max:255',
        'options' => 'required|array|min:1|max:10',
        'options.*' => 'required|min:2|max:255',
    ];

    protected $messages = [
        'options.*' => 'The option can\'t be empty'
    ];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
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
        $validated = $this->validate($this->rules);

        Poll::create($validated)->options()->createMany(
            collect($this->options)
                ->map(fn($option) => ['name' => $option])
                ->all()
        );

        $this->reset(['title', 'options']);

        $this->dispatch('pollCreated');
    }
}
