@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf

            <header class="flex align-items-center">
                <img width="40" height="40" class="rounded-full" src="https://i.pravatar.cc/100?u={{ auth()->id() }}"
                    alt="avatar">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <x-form.textarea name="body" placeholder="Quick, think of somthing." />

            <div class="flex justify-end mt-10 pt-6 mt-6 border-t border-gray-200">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="text-semibold">
        <a href="/register" class="text-blue-500 hover:underline">Register</a> or <a href="/login"
            class="text-blue-500 hover:underline"> Log in</a> to leave a comment.
    </p>
@endauth
