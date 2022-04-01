<div class="flex ml-4">   
    <form action="{{ route('research') }}" class="d-flex mr-4">
        <!-- The button to open modal -->
        <label for="my-modal-3" class="btn modal-button">Filtres</label>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="my-modal-3" class="modal-toggle">
        <div class="modal">
            <div class="modal-box relative bg-gray-300">
                <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-bold text-black">Filtre pour rechercher un praticien</h3>

                {{-- Barre de recherche --}}
                <div class="form-control py-4">
                    <div class="input-group">
                        <input type="text" placeholder="Rechercher par NOM" class="input input-bordered" name="q" value="{{ request()->q ?? '' }}">
                        <button type="submit" class="btn btn-square">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        </button>
                    </div>
                </div>

                {{-- Select pour rechercher une ville --}}
                <div class="form-control py-4">
                    <label class="input-group">
                        <select name="rechercheParType" onChange="form.submit()" class="select select-bordered select-primary text-black">
                            <option selected="selected" disabled>Choisissez votre ville</option>
                            @foreach ($praticiens as $info)
                                <option value="{{ $info->PRA_VILLE }}">{{ $info->PRA_VILLE }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
        </div>
        {{-- <button type="submit" value="0" name="reinitialiser" class="btn ml-4">Réinitialiser les filtres</button> --}}
    </form>
    <div class="text-black">
        <form action="{{ route('research') }}">
            <div>
                <input type="text" name="reinitialiser" value="0" hidden>
                <button type="submit" class="btn btn-xs sm:btn-sm md:btn-md lg:btn-md mb-4">Réinitialiser les filtres</button>
            </div>
        </form>
    </div>
</div> 
