<div>
    <form>
        <label for="title">Poll Title</label>
        <input type="text" name="title" id="title" wire:model.live="title" />
    </form>
    Current title: {{ $title }}
</div>
