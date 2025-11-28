<div class="w-full bg-slate-900 p-8 rounded-2xl shadow-md border border-slate-800">
    <form wire:submit.prevent="createPoll" class="space-y-8">

        <div>
            <label class="font-semibold text-slate-200 block mb-2">Poll Title</label>
            <input 
                type="text" 
                wire:model.live="title"
                class="w-full px-4 py-2.5 rounded-xl bg-slate-800 border border-slate-700 
                       text-slate-100 placeholder-slate-400
                       focus:border-pink-400 focus:ring-2 focus:ring-pink-400/40
                       outline-none transition"
                placeholder="e.g. Best programming language?"
            />
            @error('title')
                <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-6">
            @foreach ($options as $index => $option)
                <div class="p-5 rounded-xl bg-slate-800 border border-slate-700/70 shadow-inner">
                    <div class="flex justify-between items-center mb-3">
                        <label class="text-slate-200 font-semibold">
                            Option {{ $index + 1 }}
                        </label>

                        <button 
                            wire:click.prevent="removeOption({{ $index }})"
                            class="text-sm px-3 py-1.5 text-pink-300 border border-pink-300/60 
                                   rounded-lg hover:bg-pink-300/10 active:scale-95 transition"
                        >
                            Remove
                        </button>
                    </div>

                    <input 
                        type="text" 
                        wire:model.live="options.{{ $index }}"
                        class="w-full px-4 py-2.5 rounded-xl bg-slate-700 border border-slate-600 
                               text-slate-100 placeholder-slate-400
                               focus:border-pink-400 focus:ring-2 focus:ring-pink-400/40 
                               outline-none transition"
                        placeholder="Type an option"
                    />

                    @error('options.' . $index)
                        <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
            @endforeach

            <button 
                class="px-4 py-2 text-sm font-medium rounded-lg text-pink-400 border border-pink-400 
                       hover:bg-pink-400/10 active:scale-95 transition"
                wire:click.prevent="addOption"
            >
                + Add Option
            </button>

            @error('options')
                <p class="text-red-400 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="pt-4 flex justify-end">
            <button 
                type="submit" 
                class="px-6 py-2.5 bg-pink-400 text-slate-900 font-semibold rounded-xl 
                       hover:bg-pink-300 active:scale-95 transition shadow-sm"
            >
                Create Poll
            </button>
        </div>

    </form>
</div>
