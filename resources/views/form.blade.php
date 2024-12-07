<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter à un tableau</title>
</head>
<body>
    <h1>Ajouter une valeur à un tableau</h1>

    <form action="{{ route('submit') }}" method="POST">
        @csrf
        <label for="value">Entrez une valeur :</label>
        <input type="text" name="value" id="value" required>
        <button type="submit">Ajouter</button>
    </form>

    <h2>Valeurs actuelles dans le tableau :</h2>
    <ul>
        @foreach ($values as $value)
            <li>{{ $value }}</li>
        @endforeach
    </ul>
</body>
</html>
