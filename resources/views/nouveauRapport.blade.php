<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un nouveau rapport de visite') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center bg-primary pt-8">
                                <form action="/nouveauRapport" method="post">
                                    @csrf
                                    <div class ="container text-black mx-10">
                                        <div class="form-control pb-8">  
                                            <label class="input-group">
                                                <span>Nom Praticien</span>
                                                <select name="praticien" class="select select-bordered select-primary w-full max-w-xs">
                                                    <option selected="selected" disabled>Choisissez votre praticien</option>
                                                    @foreach ($praticiens as $info)
                                                        <option value="{{ $info->PRA_NUM }}">{{ $info->PRA_NOM." ".$info->PRA_PRENOM }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Date rapport</span>
                                                <input type="datetime-local" class="input input-bordered input-primary w-full max-w-xs" name="date" required>
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Motif du rapport</span>
                                                <input type="text" placeholder="cancer du crâne" class="input input-bordered input-primary w-full max-w-xs" name="motif" required>
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Bilan du rapport</span>
                                                <input type="text" placeholder="la personne a une douleur au dos" class="input input-bordered input-primary w-80" name="bilan" required>
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">  
                                            <label class="input-group">
                                            <span>Ajouter un médicament</span>
                                                <select name="medoc" class="select select-bordered select-primary w-full max-w-xs">
                                                    <option selected="selected" disabled>Choisissez votre medoc</option>
                                                    @foreach ($medocs as $info)
                                                        <option value="{{ $info->MED_DEPOTLEGAL }}">{{ $info->MED_NOMCOMMERCIAL }}</option>
                                                    @endforeach
                                                </select>
                                                <label class="input-group">
                                                    <input type="number" placeholder="choisir la quantité" class="input input-bordered input-primary" name="qte" required>
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger mb-4">Ajouter nouveau rapport</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
