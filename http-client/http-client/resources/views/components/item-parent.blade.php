@props(['item'])

<div>
 <ul class="d-flex justify-content-center flex-column">
  <li>{{ $item->label }}</li>
  @if(!empty($item->children))
  @foreach ($item->children as $child)
  <ul>
   <x-item-parent :item="$child" />
  </ul>
  @endforeach
  @endif
 </ul>
</div>