<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rapports de <span class="uppercase">{{ Auth::user()->VIS_NOM.' '.Auth::user()->Vis_PRENOM }}</span>
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- succès ajout rapport --}}
            @if (session('success'))
                <div class="alert alert-success shadow-lg mb-9">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>
                            {{ session('success') }}
                        </span>
                    </div>
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="overflow-x-auto">
                                    <button onclick="window.location.href = '/nouveauRapport';"class="btn btn-primary mb-8">nouveau Rapport</button>
                                    <table class="table table-zebra w-full text-black text-center">
                                        <thead class="text-white">
                                            <tr>
                                                <td class="bg-success">Praticien</td>
                                                <td class="bg-success">Date</td>
                                                <td class="bg-success">Bilan</td>
                                                <td class="bg-success">Motif</td>
                                                <td class="bg-success">Médoc</td>
                                                <td class="bg-success">Quantité</td>
                                                <td class="bg-success">PDF</td>
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
                                                        {{-- Affichage medoc --}}
                                                        @foreach($medico as $infoMedoc)
                                                            @if($infoMedoc->RAP_NUM == $info->RAP_NUM)
                                                                <li>{{ $infoMedoc->MED_NOMCOMMERCIAL }}</li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        {{-- Affichage quantite medoc --}}
                                                        @foreach($medico as $infoMedoc)
                                                            @if($infoMedoc->RAP_NUM == $info->RAP_NUM)
                                                                <li>{{ $infoMedoc->OFF_QTE }}</li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button onclick="window.location.href = '{{ route ('rapport.pdf', ['id'=>$info->RAP_NUM]) }}';" target="blank" class="btn btn-link"><img class="pr-4 pl-4" src="images/4.png"></button>
                                                </td>
                                            @endforeach
                                            </tr>
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