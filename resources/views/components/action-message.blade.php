@props(['on'])

<div x-data="{ shown: false, timeout: null }"
     x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 800); })"
     x-show.transition.out.opacity.duration.1000ms="shown"
     x-transition:leave.opacity.duration.1000ms
     style="display: none;"
    {{ $attributes->merge(['class' => 'text-sm text-gray-600 dark:text-gray-400']) }}>
    {{ $slot->isEmpty() ? 'Saved.' : $slot }}
</div>
