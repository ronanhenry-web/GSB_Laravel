<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un rapport de visite') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Alert champs vide --}}
            @if($errors->any())
            <div class="alert alert-warning shadow-lg mb-12">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>ERREUR !</span>
                    <ul class="">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center bg-blue-300 pt-8">
                                {{-- Formulaire pour modifier un rapport --}}
                                <form action="/updateRapport/{{$rapports->RAP_NUM}}" method="post">
                                    @csrf
                                    <div class ="container text-black mx-10">
                                        <div class="form-control pb-8">  
                                            <label class="input-group">
                                                <span>Nom Praticien</span>
                                                <select name="praticien" class="select select-bordered select-gray w-full max-w-xs">
                                                    <option selected="selected" disabled>Choisissez votre praticien</option>
                                                    @foreach ($praticiens as $info)
                                                        {{-- Vérification si rapport et praticien est lié pour afficher le praticien du rapport --}}
                                                        @if($info->PRA_NUM == $rapports->PRA_NUM)
                                                            <option selected="selected" value="{{ $info->PRA_NUM }}">{{ $info->PRA_NOM." ".$info->PRA_PRENOM }}</option>
                                                        @else
                                                            <option value="{{ $info->PRA_NUM }}">{{ $info->PRA_NOM." ".$info->PRA_PRENOM }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Date rapport</span>
                                                <input value="{{ $rapports->RAP_DATE }}" type="datetime-local" class="input input-bordered input-gray w-full max-w-xs" name="date">
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Motif du rapport</span>
                                                <input value="{{ $rapports->RAP_MOTIF }}" type="text" placeholder="la personne a une douleur au dos" class="input input-bordered input-gray w-full max-w-xs" name="motif">
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Bilan du rapport</span>
                                                <input value="{{ $rapports->RAP_BILAN }}" type="text" placeholder="cancer du crâne" class="input input-bordered input-gray w-80" name="bilan">
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">  
                                            <label class="input-group">
                                            <span>Ajouter un médicament</span>
                                                <select name="ajoutMedoc" class="select select-bordered select-gray w-full max-w-xs">
                                                    <option selected="selected" disabled>Choisissez votre medoc</option>
                                                    @foreach ($medocs as $info)
                                                        {{-- Vérification si offrir et médicament est lié pour afficher le médoc du rapport --}}
                                                        @if($info->MED_DEPOTLEGAL == $rapportsMedico->MED_DEPOTLEGAL)
                                                            <option selected="selected" value="{{ $info->MED_DEPOTLEGAL }}">{{ $info->MED_NOMCOMMERCIAL }}</option>
                                                        @else
                                                            <option value="{{ $info->MED_DEPOTLEGAL }}">{{ $info->MED_NOMCOMMERCIAL }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <label class="input-group">
                                                    <input value="{{ $rapports->OFF_QTE }}" type="number" placeholder="choisir la quantité" class="input input-bordered input-gray" name="quantite">
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger mb-4">Modifier rapport</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
