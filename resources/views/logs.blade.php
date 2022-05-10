<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Logs de connections') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container text-black bg-success">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <table class="table table-zebra w-full text-black text-center">
                                    <thead >
                                        <tr class="text-white">
                                            <td class="bg-success">Id</td>
                                            <td class="bg-success">Nom</td>
                                            <td class="bg-success">Date</strong></td>
                                            <td class="bg-success">Action</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach($logs as $info)
                                        <tr>
                                            <td>
                                                <p>{{ $info->id }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $info->nom }}</p>
                                            </td>
                                            <td>
                                                <p>{{ date("d/m/Y H:i", strToTime($info->date)) }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $info->action }}</p>
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
</x-app-layout>
