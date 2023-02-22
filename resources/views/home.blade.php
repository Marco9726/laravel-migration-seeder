<!DOCTYPE html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
	<div class="container w-75">
		<div class="row justify-content-between flex-wrap">
			@foreach ($trains as $train)
			<div class="card mb-3 p-3">		
				<h4 class="card-title">Treno: {{$train['codice_treno']}}</h4>
				<h6 class="card-subtitle">In Partenza da: {{$train['stazione_partenza']}}, alle ore: {{$train['orario_partenza']}}</h6>
				<h6 class="card-subtitle">Arrivo a: {{$train['stazione_arrivo']}}, alle ore: {{$train['orario_arrivo']}}</h6>
				<div class="card-text">Numero carrozze: {{$train['numero_carrozze'] }}</div>
				<div class="card-text {{($train['in_orario']) ? "text-danger" : 'text-success'}}">
					{{($train['in_orario']) ? "Cancellato" : 'In orario'}}
				</div>
			</div>
			@endforeach
		</div>
	</div>
</body>

</html>