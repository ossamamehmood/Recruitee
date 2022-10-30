@props(['tagsCsv', 'readOnly' => false])


@php
$tags = explode(',', $tagsCsv);
@endphp

{{-- A component for showing tags --}}
@if ($readOnly)
    <div class="col mb-2">
        @foreach ($tags as $tag)
            <span class="me-1 rounded-pill badge bg-dark text-decoration-none">{{ trim($tag) }}</span>
        @endforeach
    </div>
@else
    <div class="col mb-2">
        @foreach ($tags as $tag)
            <a href="/jobs?tag={{ trim($tag) }}"
                class="me-2 rounded-pill badge bg-dark text-decoration-none">{{ trim($tag) }}</a>
        @endforeach
    </div>
@endif
