<x-layout>

    <section class="px-6 py-8">
        <main class="text-center mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Insert new task </h1>
            <form method="POST" action="/task/add" class="mt-10">
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
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="priorita">
                        Priorità</label>
                    <select name="priorita" id="priorita" value="Media">
                        <option>Bassa</option>
                        <option selected="selected">Media</option>
                        <option>Alta</option>

                    </select>
                </div>
                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="assegnato_a">
                        Assegnato a</label>
                    {{-- <input type="text" name="assegnato_a'" id="assegnato_a'" required> --}}
                    <select name="assegnato_a" id="assegnato_a'" required>

                        @foreach ($users as $user)
                            @if ($user->ruolo === 'Dev')
                                <option value="{{ $user->id }}">
                                    {{ $user->nome }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="stato">
                        Stato</label>
                    <select name="stato" id="stato">
                        <option>Backlog</option>
                        <option selected="selected">To do</option>
                        <option>In progress</option>
                        <option>Done</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="progetto">
                        Progetto</label>
                    <select name="progetto" id="progetto'" required>

                        @foreach ($projects as $project)
                            {
                            <option value={{ $project->id }}>{{ $project->title }}</option>
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
