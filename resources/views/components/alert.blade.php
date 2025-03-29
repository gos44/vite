@props(['type', 'title' => ''])

@php
  $colors = [
    'danger' => 'red',
    'warning' => 'yellow',
    'info' => 'blue',
    'success' => 'green',
  ];

  $classes = $colors[$type] ?? 'blue';
@endphp

<div role="alert">
  <div {{$attributes}}  class="bg-{{ $classes }}-500 text-white font-bold rounded-t px-4 py-2">
    {{ $title }}
  </div>
  <div class="border border-t-0 border-{{ $classes }}-400 rounded-b bg-{{ $classes }}-100 px-4 py-3 text-{{ $classes }}-700">
    {{ $slot }}
  </div>
</div>
