<x-layout>

    <section class="px-6 py-8">
        <main class="text-center mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Insert new project </h1>
            <form method="POST" action="/project/add" class="mt-10">
                @csrf
                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="titolo">
                        Titolo</label>
                    <input type="text" name="titolo" id="titolo" value="{{ old('titolo') }}" required>


                </div>

                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="descrizione">
                        Descrizione</label>
                    {{-- <input type="text" name="descrizione" id="descrizione" value="{{ old('descrizione') }}" required> --}}
                    <textarea name="descrizione" class="w-400" cols="30" rows="5"> </textarea>

                </div>


                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="cliente">
                        Cliente</label>
                    <select name="cliente" id="cliente'" required>

                        @foreach ($clients as $client)
                            {
                            <option value={{ $client->id }}>{{ $client->name }}</option>
                            }
                        @endforeach
                    </select>

                </div>

                <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>


            </form>
        </main>
    </section>
</x-layout>
