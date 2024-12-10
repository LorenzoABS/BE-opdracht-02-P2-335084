<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geleverde Producten</title>
</head>
<body>
    <h1>Geleverde Producten</h1>

    @foreach ($leveranciers as $leverancier)
        <h2>Naam leverancier: {{ $leverancier->naam }}</h2>
        <p>Contactpersoon: {{ $leverancier->contactpersoon }}</p>
        <p>Leverancier NR: {{ $leverancier->leverancier_nr }}</p>
        <p>Mobiel: {{ $leverancier->mobiel }}</p>

        <table>
            <thead>
                <tr>
                    <th>Naam product</th>
                    <th>Aantal in Magazijn</th>
                    <th>Verpakkingsgrootte</th>
                    <th>Laatste levering</th>
                    <th>Nieuwe levering</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leverancier->producten as $product)
                    <tr>
                        <td>{{ $product->naam }}</td>
                        <td>{{ $product->aantal_in_magazijn }}</td>
                        <td>{{ $product->verpakkingsgrootte }}</td>
                        <td>{{ $product->laatste_levering }}</td>
                        <td><a href="#" class="button">+</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach

    <div class="buttons">
        <a href="/" class="button">Home</a>
        <a href="javascript:history.back()" class="button">Terug</a>
    </div>
</body>
</html>
