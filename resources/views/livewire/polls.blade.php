<div class="space-y-8">
    @forelse ($polls as $poll)
        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 shadow-lg hover:shadow-xl transition-shadow">

            <h3 class="mb-5 text-2xl font-semibold text-slate-100 tracking-tight">
                {{ $poll->title }}
            </h3>

            <div class="space-y-4">
                @foreach ($poll->options as $option)
                    <div class="flex items-center justify-between p-4 rounded-xl 
                                bg-slate-800 border border-slate-700/70 
                                hover:bg-slate-700/70 transition-colors shadow-inner">

                        <div class="flex flex-col">
                            <span class="text-slate-100 font-semibold text-lg">
                                {{ $option->name }}
                            </span>
                            <span class="text-sm text-slate-400">
                                Votes: {{ $option->votes->count() }}
                            </span>
                        </div>

                        <button 
                            wire:click="vote({{ $option->id }})"
                            class="px-4 py-2 rounded-xl bg-pink-400 text-slate-900 font-semibold
                                   hover:bg-pink-300 active:scale-95 transition-all shadow-md"
                        >
                            Vote
                        </button>
                    </div>
                @endforeach
            </div>

        </div>
    @empty
        <div class="text-slate-400 text-center py-10">
            No polls available
        </div>
    @endforelse
</div>
