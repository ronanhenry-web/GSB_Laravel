<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un rapport de visite') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="overflow-x-auto">
                                    <button onclick="window.location.href = '/rapport';"class="btn btn-primary mb-8 ml-2">Retour</button>
                                    <table class="table table-zebra w-full text-black text-center">
                                        @if($rapports->isNotEmpty())
                                            <thead class="text-white">
                                                <tr>
                                                    <td class="bg-success">Praticien</td>
                                                    <td class="bg-success">Date</td>
                                                    <td class="bg-success">Bilan</td>
                                                    <td class="bg-success">Motif</td>
                                                    <td class="bg-success">Médoc</td>
                                                    <td class="bg-success">Quantité</td>
                                                    <td class="bg-success">Modifier</td>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                @foreach($rapports as $info)
                                                <tr>
                                                    <td>
                                                        <p>{{ $info->PRA_NUM }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ date("d/m/Y H:i", strToTime($info->RAP_DATE)) }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $info->RAP_BILAN }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $info->RAP_MOTIF }}</p>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            {{-- Afficher les medocs --}}
                                                            @foreach($medico as $infoMedoc)
                                                                @if($infoMedoc->RAP_NUM == $info->RAP_NUM)
                                                                    <li>{{ $infoMedoc->MED_NOMCOMMERCIAL }}</li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            {{-- Afficher la quantitée du medoc --}}
                                                            @foreach($medico as $infoMedoc)
                                                                @if($infoMedoc->RAP_NUM == $info->RAP_NUM)
                                                                    <li>{{ $infoMedoc->OFF_QTE }}</li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        {{-- Lien qui récupére le numéro du rapport pour le modifier --}}
                                                        <a href = '{{ route ('update', ['id'=>$info->RAP_NUM]) }}'><img class="pr-4 pl-4 w-20" src="images/6.png"></a>
                                                    </td>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        @else
                                            <div class="alert alert-warning shadow-lg">
                                                <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                                                <span>Aucun résultat, il n'y a plus de rapport !</span>
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

