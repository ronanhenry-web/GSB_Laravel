<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rechercher un praticien dans la liste de France') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class ="container">
                        <form method="get" action="{{ route('recherchePraticien') }}" style="text-align: center;">
                            @csrf
                            <select name="recherchePraticiens" onChange="form.submit()">
                                @foreach ($praticiens as $info)
                                    <option value="{{ $info->PRA_NUM }}">{{ $info->PRA_NOM." ".$info->PRA_PRENOM }} </option>
                                @endforeach
                            </select>
                        </form>
                        <br>
                        <br>
                        <div class="mb-3" style="margin-left: 25%;">  
                            <label for="exampleInputEmail1" class="form-label"><strong>Numéro praticien :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ {{ $praticien->PRA_NUM }}</p>

                        <div class="mb-3" style="margin-left: 25%;">  
                            <label for="exampleInputEmail1" class="form-label"><strong>Nom du praticien :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ {{ $praticien->PRA_NOM }}</p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Prénom du praticien :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ {{ $praticien->PRA_PRENOM }}</p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Adresse :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ {{ $praticien->PRA_ADRESSE }}</p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Ville :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ {{ $praticien->PRA_VILLE }}</p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Code postal :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ {{ $praticien->PRA_CP }}</p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Coefficient de notoriété :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ {{ $praticien->PRA_COEFNOTORIETE }}</p>

                        <br>
                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Lieu d'exercice :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ {{ $praticien->TYP_CODE }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
