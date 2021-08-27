@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        class="border border-gray placeholder-black p-2 w-full"
        {{ $attributes(['value' => old($name) ]) }}"
        required
    >

    <x-form.error name="{{ $name }}" />
</x-form.field>
