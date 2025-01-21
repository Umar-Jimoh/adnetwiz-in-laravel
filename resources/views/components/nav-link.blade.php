@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-slate-400'
            : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
