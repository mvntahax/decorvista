@if ($paginator->hasPages())
    <nav aria-label="Pagination" class="flex items-center justify-center mt-12">
        <div class="flex items-center gap-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full text-[var(--zinc-gray)]">
                    <span class="material-symbols-outlined">chevron_left</span>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full text-[var(--zinc-gray)] hover:bg-[var(--light-gray)] transition-colors">
                    <span class="material-symbols-outlined">chevron_left</span>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="text-[var(--zinc-gray)]">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[var(--midnight)] text-[var(--ivory)] font-medium">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full text-[var(--zinc-gray)] hover:bg-[var(--hover-gray)] hover:text-[var(--ivory)] transition-colors">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full text-[var(--zinc-gray)] hover:bg-[var(--light-gray)] transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </a>
            @else
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full text-[var(--zinc-gray)]">
                    <span class="material-symbols-outlined">chevron_right</span>
                </span>
            @endif
        </div>
    </nav>
@endif