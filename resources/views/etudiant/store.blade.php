<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
</head>
<div class="card">
    <table class="table-bordered">
        <thead>
            <th>N°</th>
            <th>Nom </th>
            <th>Prenom</th>
            <th>Matiere</th>
            <th>note</th>
            <th>Examen</th>
            <th>semestre</th>
        </thead>
        <tbody>
            {{$moyenne = 1}}
            @foreach($etudiants as $etu)
            <tr>
                <td>{{$etu->id}}</td>
                <td>{{$etu->nom}}</td>
                <td>{{$etu->prenom}}</td>
                <td>{{$etu->matiere->nom}}</td>
                <td>{{$etu->note}}</td>
                <td>{{$etu->examen}}</td>
                <td>{{$etu->semestre->nom}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

<body>

</body>

</html>