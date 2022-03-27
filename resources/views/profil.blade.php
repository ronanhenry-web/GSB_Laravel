<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification du profil visiteur') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <form action="/profil" method="post">
                                    @csrf
                                    <div class ="container text-black mx-10">
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Nom</span>
                                                <input value="{{$visiteurs = auth()->user()->VIS_NOM}}" type="text" class="input input-bordered input-primary" name="nom" required>
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Prénom</span>
                                                <input  value="{{$visiteurs = auth()->user()->Vis_PRENOM}}" type="text" class="input input-bordered input-primary" name="prenom" required>
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Adresse</span>
                                                <input value="{{$visiteurs = auth()->user()->VIS_ADRESSE}}" type="text" class="input input-bordered input-primary w-full max-w-xs" name="adresse" required>
                                            </label>
                                        </div>
                                        <div class="form-control pb-12">
                                            <label class="input-group">
                                                <span>Ville</span>
                                                <input value="{{$visiteurs = auth()->user()->VIS_VILLE}}" type="text" class="input input-bordered input-primary" name="ville" required>
                                            </label>
                                        </div>
                                        <div class="form-control pb-12">
                                            <label class="input-group">
                                                <span>Code postal</span>
                                                <input value="{{$visiteurs = auth()->user()->VIS_CP}}" type="number" class="input input-bordered input-primary" name="cp" required>
                                            </label>
                                        </div>
                                    </div>       
                                    <button type="submit" class="btn btn-primary mb-4">Modifier profil</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
