<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semiblod lg:w-32 text-left lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-down-arrow class="absolute pointer-events-none"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>

    @foreach ($categories as $c)
        <x-dropdown-item
            href="/?category={{ $c->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active='request()->is("categories/{$c->slug}")'
            >
            {{ ucwords($c->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
