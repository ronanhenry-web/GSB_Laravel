<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rechercher un médicament dans la liste') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container text-black">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form method="get" action="{{ route('rechercheMedoc') }}" style="text-align: center;">
                                @csrf
                                    <div class="form-control pb-8">
                                        <label class="label">
                                            <span>Liste des médicaments !</span>
                                        </label>
                                        <label class="input-group">
                                            <select name="rechercheMedoc" onChange="form.submit()" class="select select-bordered select-primary">
                                                <option selected="selected" disabled>Choisissez votre médicament</option>
                                                @foreach ($medicaments as $info)
                                                    <option value="{{ $info->MED_DEPOTLEGAL }}">{{ $info->MED_NOMCOMMERCIAL }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </form>
                                <div class="overflow-x-auto">
                                    <table class="table table-zebra w-full text-black">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="link text-success">NOM :</span>
                                                    <p>{{ $medicament->MED_NOMCOMMERCIAL }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="link text-success">CODE :</span>
                                                    <p>{{ $medicament->FAM_CODE }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="link text-success">COMPOSITION :</span>
                                                    <p>{{ $medicament->MED_COMPOSITION }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="link text-success text-wrap">EFFETS :</span>
                                                    <p>{{ $medicament->MED_EFFETS }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="link text-success text-wrap">CONTRE INDICATION :</span>
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
