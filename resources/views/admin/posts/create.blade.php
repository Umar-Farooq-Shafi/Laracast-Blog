<x-layout>
    <x-setting heading="Publish new Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="thumbnail" type="file"/>

            <x-form.textarea name="excerpt"/>
            <x-form.textarea name="body"/>

            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" value="{{ old('category_id') == $cat->id ? 'selected' : '' }}">{{ ucwords($cat->name) }}</option>
                    @endforeach
                </select>
            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>
</x-layout>
