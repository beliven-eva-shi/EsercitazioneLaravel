<x-layout>

    <section class="px-6 py-8">
        <main class="text-center mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Insert new client </h1>
            <form method="POST" action="/client/add" class="mt-10">
                @csrf
                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Nome cliente</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required>

                </div>


                <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>


            </form>
        </main>
    </section>
</x-layout>
