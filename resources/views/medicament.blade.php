<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rechercher un médicament') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container text-black bg-success">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form method="get" action="{{ route('rechercheMedoc') }}">
                                @csrf
                                    <div class="form-control py-8 mx-12 pl-8">
                                        <label class="input-group">
                                            <span>Liste des médicaments !</span>
                                            <select name="rechercheMedoc" onChange="form.submit()" class="select select-bordered select-success" required>
                                                <option selected="selected" disabled>Choisissez votre médicament</option>
                                                @foreach ($medicaments as $info)
                                                    <option value="{{ $info->MED_DEPOTLEGAL }}">{{ $info->MED_NOMCOMMERCIAL }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </form>
                                <div class="overflow-x-auto">
                                    <table class="table w-full text-black">
                                        <tbody>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline text-black pl-2 pr-2">NOM :</span>
                                                    <p>{{ $medicament->MED_NOMCOMMERCIAL }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline text-black pl-2 pr-2">CODE :</span>
                                                    <p>{{ $medicament->FAM_CODE }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline w-full text-black pl-2 pr-2">COMPOSITION :</span>
                                                    <p>{{ $medicament->MED_COMPOSITION }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline w-full text-wrap text-black pl-2 pr-2">EFFETS :</span>
                                                    <p>{{ $medicament->MED_EFFETS }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline text-black pl-2 pr-2">CONTRE INDICATION :</span>
                                                    <p>{{ $medicament->MED_CONTREINDIC }}</p>
                                                </td>
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
