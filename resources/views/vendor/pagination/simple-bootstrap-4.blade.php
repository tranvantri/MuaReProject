@if ($paginator->hasPages())
    <ul class="pagination pagination2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link" style="border-radius: 0px;">« Trang trước</span></li>
        @else
            <li class="page-item"><a class="page-link" style="border-radius: 0px;" href="{{ $paginator->previousPageUrl() }}" rel="prev">« Trang trước</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" style="border-radius: 0px;" href="{{ $paginator->nextPageUrl() }}" rel="next">Trang sau »</a></li>
        @else
            <li class="page-item disabled"><span style="border-radius: 0px;" class="page-link">Trang sau »</span></li>
        @endif
    </ul>
@endif
