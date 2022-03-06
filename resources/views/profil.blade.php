<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification du profil utilisateur') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form action="/profil" method="post">
                                    @csrf
                                    <div class ="container">
                                        <div class="mb-3" style="background-color: grey; margin-right: 843px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Nom du visiteur :</label>
                                            <input value="{{$visiteurs = auth()->user()->VIS_NOM}}" type="text" class="form-control" name="nom" required>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="mb-3" style="background-color: grey; margin-right: 820px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Prénom du visiteur :</label>
                                            <input  value="{{$visiteurs = auth()->user()->Vis_PRENOM}}" type="text" class="form-control" name="prenom" required>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="mb-3" style="background-color: grey; margin-right: 895px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Adresse :</label>
                                            <input value="{{$visiteurs = auth()->user()->VIS_ADRESSE}}" type="text" class="form-control" name="adresse" required>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="mb-3" style="background-color: grey; margin-right: 924px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Ville :</label>
                                            <input value="{{$visiteurs = auth()->user()->VIS_VILLE}}" type="text" class="form-control" name="ville" required>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="mb-3" style="background-color: grey; margin-right: 868px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Code postal :</label>
                                            <input value="{{$visiteurs = auth()->user()->VIS_CP}}" type="text" class="form-control" name="cp" required>
                                        </div>
                                    </div>  
                                    <br>
                                    <br>
                                    <br>         
                                    <button type="submit" style="font-size: 24px; background-color: rgb(0, 119, 255); border-radius: 3px; padding-left: 5px; padding-right: 5px; margin-left: 80%;">Modifier profil</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
