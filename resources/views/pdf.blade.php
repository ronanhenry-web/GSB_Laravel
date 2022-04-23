<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    img {
        margin-left: 50%;
        transform: translateX(-50%);
    }
    h2 {
        text-align: center;
        margin-top: 10%;
    }
    li {
        list-style-type: none;
    }
    .praticien {
        margin-left: 60%;
    }
    .bilan {
        margin-top: 10%;
        margin-left: 5%;
    }
    footer {
        margin-top: 20%;
    }
</style>

<body>
    <div class="text-center">
        <img class="ml-45 mt-8 indicator" src="images/2.png" alt="GSB">
    </div>
    
    <h2>Rapport de visite</h2>
    
    {{-- Parti Visiteur --}}
    <div class="visiteur">
        <ul>
            <li>{{Auth::user()->VIS_NOM}} {{Auth::user()->Vis_PRENOM}}</li>
            <li>{{Auth::user()->VIS_ADRESSE}} <br> {{Auth::user()->VIS_VILLE}} {{Auth::user()->VIS_CP}}</li>
        </ul>
    </div>
    
    {{-- Parti Praticien --}}
    <div class="praticien">
        <u>Praticien :</u> <br>
        {{$praticiens->PRA_NOM}} {{$praticiens->PRA_PRENOM}} <br>
        {{$praticiens->PRA_ADRESSE}} <br> {{$praticiens->PRA_VILLE}} {{$praticiens->PRA_CP}}
    </div>

    {{-- Parti Bilan --}}
    <div class="bilan">
        <h3>Information du bilan :</h3>
        <p>Le rapport numéro {{$rapports->RAP_NUM}}, il a été fait le 
            {{ date("d/m/Y H:i", strToTime($rapports->RAP_DATE)) }}.<br>
        Nous avons diagnostiqué un(e) {{$rapports->RAP_MOTIF}}.
        <br>Le praticien a déduit le bilan suivant {{$rapports->RAP_BILAN}}.
        </p>
        <br>
        <h3>Prescription du médicament :</h3>
        <p>Le visiteur {{Auth::user()->VIS_NOM}} {{Auth::user()->Vis_PRENOM}}.</p>
        <p>Il devra prendre le médicamanent {{$medico->MED_DEPOTLEGAL}} en pharmacie pour une quantité 
            de {{$medico->OFF_QTE}}.</p>
    </div>

    <footer>
            <div>
                <p>GSB Industries Ltd.<br>Providing reliable medicaments since 1983</p>
            </div>
    </footer>
</body>
</html>