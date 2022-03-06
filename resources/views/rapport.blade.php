<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rapport du praticien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class ="container">
                                    <a href="/nouveauRapport" style="font-size: 24px; background-color: lightgrey; border-radius: 3px; padding-left: 5px; padding-right: 5px; margin-left: 10%;">Nouveau rapport</a>
                                    <br>
                                    <br>
                                    <table>
                                        <thead style="text-align: center; border: solid rgb(0, 119, 255);">
                                            <tr>
                                                <td><strong>Visiteur</strong></td>
                                                <td><strong>Numéro</strong></td>
                                                <td><strong>Praticien</strong></td>
                                                <td><strong>Date</strong></td>
                                                <td><strong>Bilan</strong></td>
                                                <td><strong>Motif</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody >
                                                @foreach($rapports as $info)
                                                <tr style="border: solid rgb(0, 119, 255);">
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->VIS_MATRICULE }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->RAP_NUM }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->PRA_NUM }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->RAP_DATE }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255)">
                                                        <p>{{ $info->RAP_BILAN }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255)">
                                                        <p>{{ $info->RAP_MOTIF }}</p>
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