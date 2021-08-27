@props(['name'])

<label
    for="{{ $name }}"
    class="block mb-2 text-uppercase font-bold text-xs text-gray-700"
>
    {{ ucwords($name) }}
</label>
