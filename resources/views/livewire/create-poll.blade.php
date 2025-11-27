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
            <p>{{ $index + 1 }}. {{ $option }}</p>
        </div>
    @endforeach
</div>
