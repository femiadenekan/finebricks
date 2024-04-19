@if ($paginator->hasPages())
    <div class="pagination">
        
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
               
				<a class="prevposts-link disabled"><i class="fas fa-caret-left"></i><span>Prev</span></a>
            @else
                
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
              
				
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="disabled" aria-disabled="true"><span>{{ $element }}</span></a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="current-page" aria-current="page"><span>{{ $page }}</span></a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                
                   
					<a href="{{ $paginator->nextPageUrl() }}" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                
            @else
                
				 <a class="nextposts-link disabled"><span>Next</span><i class="fas fa-caret-right"></i></a>
				 
            @endif
   
    </div>
@endif
