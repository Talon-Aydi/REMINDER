@props ([
    'type' => 'text',
    'placeholder' => '',
])

<div>
    <input
        type="{{ $type }}"
        {{ $attributes->merge(['class' => 'border-b outline-none w-full']) }}
        placeholder="{{ $placeholder }}"
    />
</div>
