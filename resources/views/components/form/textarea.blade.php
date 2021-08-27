@props(['name', 'placeholder' => ''])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <textarea
        placeholder="{{ $placeholder }}"
        name="{{ $name }}"
        class="border border-gray placeholder-black p-2 w-full"
        required
        >{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
