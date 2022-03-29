<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rapports de <span class="uppercase">{{ Auth::user()->VIS_NOM.' '.Auth::user()->Vis_PRENOM }}</span>
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
                                            </tr>
                                            @endforeach
                                            {{-- @foreach($medocsQte as $info)
                                            <tr>
                                                <td>
                                                    <p>{{ $info->MED_DEPOTLEGAL }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $info->OFF_QTE }}</p>
                                                </td>
                                            </tr>
                                            @endforeach --}}
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