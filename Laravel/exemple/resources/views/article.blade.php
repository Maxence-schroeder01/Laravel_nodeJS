<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<title>Les articles</title>
<body>

@extends('template')

@section('titre')
    Les articles
@stop

@section('contenu')
    <p>C'est l'article n {{ $numero }}</p>
@stop
	<p>C'est l'article n {{ $numero }}</p>
</body>
</html>

