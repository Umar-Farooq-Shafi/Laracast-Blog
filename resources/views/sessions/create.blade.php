<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-sm">Login</h1>

                <form action="/sessions" method="post" class="mt-10">
                    @csrf
                    @method("POST")

                    <x-form.input name="email" />
                    <x-form.input name="password" />

                    <x-form.submit>Log In!</x-form.submit>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
