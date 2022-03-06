<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rechercher un visiteur dans sa liste de client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                @include('search')
                                <br>
                                <div class="container">
                                    <table>
                                        <thead style="text-align: center; border: solid rgb(0, 119, 255);">
                                            <tr>
                                                <td><strong>Matricule</strong></td>
                                                <td><strong>Nom</strong></td>
                                                <td><strong>Prénom</strong></td>
                                                <td><strong>Adresse</strong></td>
                                                <td><strong>Ville</strong></td>
                                                <td><strong>Code postale</strong></td>
                                                <td><strong>Laboratoire code</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($visiteurs as $info)
                                                <tr style="border: solid rgb(0, 119, 255);">
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->VIS_MATRICULE }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->VIS_NOM }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->Vis_PRENOM }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255);">
                                                        <p>{{ $info->VIS_ADRESSE }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->VIS_VILLE }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->VIS_CP }}</p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p>{{ $info->LAB_CODE }}</p>
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
