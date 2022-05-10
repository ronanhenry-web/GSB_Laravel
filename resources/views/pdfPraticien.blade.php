<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Praticien</title>
</head>

<style>
    h2 {
        text-align: center;
    }
    h4 {
        text-align: center;
    }
    .praticien {
        border-style:solid; 
        margin-left: 20%;
        margin-right: 20%;
    }
    .date {
        margin-left: 10%;
    }
</style>

<body>
    <h2>Fiche Docteur {{ $posseder->PRA_NOM }}</h2>
    <h4>{{ $posseder->PRA_ADRESSE }}</h4>
    <h4>{{ $posseder->PRA_CP." ".$posseder->PRA_VILLE }}</h4>
    <br>
    <br>
    <br>
    <br>
    <div>
        <table>

            <tr>
                <td>Nom : </td>
                <td>{{ $posseder->PRA_NOM }}</td>
            </tr>
        </table>
        <p class="praticien">Nom : {{ $posseder->PRA_NOM }}</p>
        <p class="praticien">Prénom : {{ $posseder->PRA_PRENOM }}</p>
        <p class="praticien">Adresse : {{ $posseder->PRA_ADRESSE }}</p>
        <p class="praticien">Code postal : {{ $posseder->PRA_CP }}</p>
        <p class="praticien">Ville : {{ $posseder->PRA_VILLE }}</p>
        <p class="praticien">Diplôme : {{ $posseder->POS_DIPLOME }}</p>
        <p class="praticien">Spécialité : {{ $posseder->SPE_CODE }}</p>
        {{-- @if($posseder->POS_DIPLOME is null && $posseder->SPE_CODE is null)
            <p class="praticien">Diplôme :</p>
            <p class="praticien">Spécialité :</p>
        @else
            <p class="praticien">Diplôme : {{ $posseder->POS_DIPLOME }}</p>
            <p class="praticien">Spécialité : {{ $posseder->SPE_CODE }}</p>
        @endif --}}
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="date">
        <p>Date des visites : 
            {{-- @if(Auth::user()->VIS_NOM && $posseder->PRA_NUM == ) --}}
                {{-- @foreach($rapports as $info) 
                    {{$info->RAP_DATE.","}}
                @endforeach  --}}
            {{-- @endif --}}
        </p>
    </div>
</body>
</html>