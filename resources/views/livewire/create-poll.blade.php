<div>
    <form>
        <label for="title">Poll Title</label>
        <input type="text" name="title" id="title" wire:model.live="title" />
    </form>
    Current title: {{ $title }}

    <div class="mt-4">
        <button class="btn" wire:click.prevent="addOption">Add Option</button>
    </div>

    @foreach($options as $index => $option)
        <div class="mt-4">
            <label>Option {{ $index +1 }}</label>
            <div class="flex gap-2 ">
                <input type="text" name="" id="" wire:model="options.{{ $index }}">
                <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
            </div>
        </div>
    @endforeach
</div>
