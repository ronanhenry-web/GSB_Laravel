<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rechercher un praticien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('empty'))
                <div class="alert alert-warning shadow-lg mb-9">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>
                            {{ session('empty') }}
                        </span>
                    </div>
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                {{-- Filtres --}}
                                @include('search')
                                <div class="overflow-x-auto mt-8">
                                    <table class="table table-zebra w-full text-black text-center">
                                        @if($praticiens->isNotEmpty())
                                            <thead >
                                                <tr class="text-white">
                                                    <td class="bg-success">PDF</td>
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
                                                        <a href = '{{ route ('pdfPraticien', ['id'=>$info->PRA_NUM]) }}' target="_blank">X<img class="pr-4 pl-4 w-24" src=""></a>
                                                    </td>
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
                                                    <td>
                                                        <p>{{ $info->TYP_LIBELLE }}</p>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        @else
                                            <div class="alert alert-warning shadow-lg">
                                                <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                                                <span>Aucun résultat, réinitialiser les filtres !</span>
                                                </div>
                                            </div>
                                        @endif
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

