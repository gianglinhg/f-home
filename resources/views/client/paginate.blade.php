<style>
  .pagination {
    display: flex;
    justify-content: center;
    width: 100%;
  }

  .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
  }

  .pagination a.active {
    background-color: #035550;
    color: white;
  }

  .pagination a:hover:not(.active) {
    background-color: #ddd;
  }

  .disabled {
    color: #999;
  }
</style>
@if ($paginator->hasPages())
<div class="pagination">
  @if ($paginator->onFirstPage())
  <a href="#" class="disabled">&laquo;</a>
  @else
  <a href="#">&laquo;</a>
  @endif
  @foreach ($elements as $element)
  {{-- "Three Dots" Separator --}}
  @if (is_string($element))
  <a href="#">{{$element}}</a>
  @endif
  @if (is_array($element))
  @foreach ($element as $page => $url)
  @if ($page == $paginator->currentPage())
  <a href="#" class="active">{{$page}}</a>
  @else
  <a href="{{$url}}" class="">{{$page}}</a>
  @endif
  @endforeach
  @endif
  @endforeach

  @if ($paginator->hasMorePages())
  <a href="#">&raquo;</a>
  @else
  <a href="#" class="disabled" aria-disabled="true">&raquo;</a>
  @endif
</div>
@endif