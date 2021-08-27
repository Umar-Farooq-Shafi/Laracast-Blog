<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-2 rounded-xl">
            <h1 class="text-center font-bold text-sm">Register</h1>

            <form action="/register" method="post" class="mt-10">
                @csrf
                @method("POST")

                <div class="mb-6">
                    <label for="name" class="block mb-5 uppercase font-bold text-xs text-grey-500">Name</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="border border-grey-500 p-2 w-full" required>

                    @error('name')
                        <p class="text-red-500 text-sm-center my-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-5 uppercase font-bold text-xs text-grey-500">Username</label>
                    <input type="text" value="{{ old('username') }}" name="username" class="border border-grey-500 p-2 w-full" required>

                    @error('username')
                        <p class="text-red-500 text-sm-center my-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-5 uppercase font-bold text-xs text-grey-500">Email</label>
                    <input type="email" value="{{ old('email') }}" name="email" class="border border-grey-500 p-2 w-full" required>

                    @error('email')
                        <p class="text-red-500 text-sm-center my-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-5 uppercase font-bold text-xs text-grey-500">Password</label>
                    <input type="password" name="password" class="border border-grey-500 p-2 w-full" required>

                    @error('password')
                        <p class="text-red-500 text-sm-center my-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <input type="submit" value="Submit" class="bg-blue-400 text-white rounded px-2 py-2 text-center hover:bg-blue-500">
                </div>
            </form>
        </main>
    </section>

    <x-flash />
</x-layout>
