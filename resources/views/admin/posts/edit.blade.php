<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" :value="old('title' => $post->title)"/>
            <x-form.input name="slug" :value="old('slug' => $post->slug)"/>
            <x-form.input name="thumbnail" type="file" :value="old('thumbnail' => $post->thumbnail)"/>

            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" value="{{ old('category_id', $cat->id) == $cat->id ? 'selected' : '' }}">{{ ucwords($cat->name) }}</option>
                    @endforeach
                </select>
            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>
</x-layout>
