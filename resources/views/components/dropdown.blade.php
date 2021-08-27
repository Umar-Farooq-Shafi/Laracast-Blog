@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="relative">
    <div @click="show = ! show">{{ $trigger }}</div>

    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full font-semiblod text-sm text-left overflow-auto max-h-52">
        {{ $slot }}
    </div>
</div>
