<div>
    <form wire:submit.prevent="createPoll">
        <label for="title">Poll Title</label>
        <input type="text" wire:model.live="title" />
        @error('title')
            <p class="text-red-400">{{ $message }}</p>
        @enderror

        <div class="mt-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        @foreach ($options as $index => $option)
            <div class="mt-4">
                <label>Option {{ $index + 1 }}</label>
                <div class="flex gap-2 ">
                    <input type="text" wire:model.live="options.{{ $index }}">
                    <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                </div>
                @error('options.' . $index)
                    <p class="text-red-400">{{ $message }}</p>            
                @enderror
            </div>
            @endforeach
            @error('options')
                <p class="text-red-400 mt-4">{{ $message }}</p>            
            @enderror
        <hr class="mt-12">
        <div class="mt-4 flex justify-end">
            <button type="submit" class="btn">Create Poll</button>
        </div>
    </form>
</div>
