<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rechercher un praticien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                {{-- Filtres --}}
                                @include('search')
                                <div class="overflow-x-auto mt-8    ">
                                    <table class="table table-zebra w-full text-black text-center">
                                        <thead >
                                            <tr class="text-white">
                                                <td class="bg-success">Nom</td>
                                                <td class="bg-success">Prénom</td>
                                                <td class="bg-success">Adresse</strong></td>
                                                <td class="bg-success">Ville</td>
                                                <td class="bg-success">Coef Notoriété</td>
                                                <td class="bg-success">Fonction</td>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            @foreach($praticiens as $info)
                                            <tr>
                                                <td>
                                                    <p>{{ $info->PRA_NOM }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $info->PRA_PRENOM }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $info->PRA_ADRESSE }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $info->PRA_CP }}, {{ $info->PRA_VILLE }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $info->PRA_COEFNOTORIETE }}</p>
                                                </td>
                                                {{-- Affichage complet des types code --}}
                                                <td>
                                                    @if ($info->TYP_CODE == "MH")
                                                        <p>Médecin Hospitalier</p>        
                                                    @elseif ($info->TYP_CODE == "MV")
                                                        <p>Médecin de Ville</p>    
                                                    @elseif ($info->TYP_CODE == "PH")
                                                        <p>Pharmacien Hospitalier</p>
                                                    @elseif ($info->TYP_CODE == "PO")
                                                        <p>Pharmacien Officine</p>
                                                    @elseif ($info->TYP_CODE == "PS")
                                                        <p>Personnel de santé</p>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

