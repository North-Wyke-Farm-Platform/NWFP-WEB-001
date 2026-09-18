@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-nw-blue-700 focus:border-nw-blue-900 focus:ring-nw-blue-900 text-nw-blue-900 shadow-sm']) !!}>
