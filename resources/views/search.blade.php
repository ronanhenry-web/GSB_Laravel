<form action="{{ route('research') }}" class="d-flex mr-3">
    <div class="form-group mb-0 mr-1" style="background-color: rgb(0, 119, 255); margin-right: 74%;">
        <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}" placeholder="Nom">
        <button type="submit" style="font-size: 24px; background-color: rgb(0, 119, 255); border-radius: 3px;">Chercher</button>
    </div>
    
</form>