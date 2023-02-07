<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
</head>

<body>
    <div class="container mt-5 col-6">
        <div class="card">
            <div class="card-header">
                <h3>Ajout</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('liste') }}" method="post">
                    @csrf
                    <label for="" class="">Nom</label>
                    <input name="nom" type="text" class="form-control">
                    <label for="" class="">Prenom</label>
                    <input name="prenom" type="text" class="form-control">
                    <label for="" class="">Note</label>
                    <input name="note" type="text" class="form-control">
                    <label for="" class="">Examen</label>
                    <input name="examen" type="text" class="form-control">

                    <label for="">Semestre</label>
                    <select name="semestre_id" id="" class="form-control">
                        <option value=""></option>
                        @foreach($semestres as $semestre)
                        <option value="{{ $semestre->id}}">{{$semestre->nom}}</option>
                        @endforeach
                    </select>
                    <label for="">Matiere</label>
                    <select name="matiere_id" id="" class="form-control">
                        <option value=""></option>
                        @foreach($matieres as $matiere)
                        <option value="{{ $matiere->id}}">{{$matiere->nom}}</option>
                        @endforeach
                    </select>
                    <button type="" class="btn btn-success mt-3 offset-6">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>