<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        

        {{-- Bagian untuk menampilkan berita terbaru --}}
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 p-6 bg-white shadow-sm">
            {{-- Header Modern dengan Ikon --}}
            <div class="mb-6 flex items-center space-x-3">
                <x-icon.newspaper class="h-6 w-6 text-indigo-600" />
                <h2 class="text-2xl font-semibold text-zinc-900">{{ __('Latest Articles') }}</h2>
            </div>

            @php
                $latestNews = \App\Http\Controllers\NewsController::getLatestNews(3);
            @endphp

            @if ($latestNews->isEmpty())
                <p class="text-zinc-500">{{ __('No articles published yet.') }}</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($latestNews as $newsItem)
                        <a href="{{ route('news.show', $newsItem) }}" wire:navigate
                            class="group block overflow-hidden rounded-lg border border-zinc-200 bg-white shadow hover:shadow-xl transition-shadow duration-300">

                            @if ($newsItem->image_path)
                                <div class="overflow-hidden">
                                    <img src="{{ Storage::url($newsItem->image_path) }}" alt="{{ $newsItem->title }}"
                                        class="h-48 w-full object-cover group-hover:scale-105 transition-transform duration-300" />
                                </div>
                            @endif

                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-zinc-900 mb-2 line-clamp-2">
                                    {{ $newsItem->title }}
                                </h3>
                                <p class="text-sm text-zinc-600 line-clamp-3 mb-3">
                                    {{ Str::limit(strip_tags($newsItem->content), 100) }}
                                </p>
                                <p class="text-xs text-zinc-500">
                                    🕒 {{ __('Published on') }} {{ $newsItem->created_at->format('d M Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>

                @if (\App\Models\News::count() > 3)
                    <div class="mt-6 text-center">
                        <a href="{{ route('news.index') }}"
                            class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-indigo-600 bg-indigo-100 hover:bg-indigo-200 rounded-md shadow-sm transition">
                            <x-icon.arrow-right class="h-4 w-4" />
                            {{ __('View All Articles') }}
                        </a>
                    </div>
                @endif
            @endif
        </div>


    </div>
</x-layouts.app>