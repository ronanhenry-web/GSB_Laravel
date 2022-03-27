<form action="{{ route('research') }}" class="d-flex mr-3">
    <div class="form-control">
        <div class="input-group">
            <input type="text" placeholder="Rechercher par nom" class="input input-bordered" name="q" value="{{ request()->q ?? '' }}">
            <button type="submit" class="btn btn-square">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </button>
        </div>
    </div>
</form>