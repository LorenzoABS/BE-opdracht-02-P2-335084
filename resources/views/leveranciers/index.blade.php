    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leveranciers</title>
        <!-- Je kunt hier je CSS (bv. Bootstrap) toevoegen -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
    <tbody>
        <div class="container">
            <h1 class="my-4">Leveranciers</h1>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Naam</th>
                        <th>contactpersoon</th>
                        <th>leveranciernummer</th>
                        <th>Mobiel</th>
                        <th>Aantal Verschilende Produchten</th>
                        <th>Toon Producten</th>
                    </tr>
                </thead>
                
        @foreach ($leveranciers as $leverancier)
            <tr>
                <td>{{ $leverancier->Id }}</td>
                <td>{{ $leverancier->naam }}</td>
                <td>{{ $leverancier->ContactPersoon }}</td>
                <td>{{ $leverancier->leverancierNummer }}</td>
                <td>{{ $leverancier->Mobiel }}</td>
                <td>{{ $leverancier->AantalVerschilendeProduchten }}</td>
                <td>
                    <a href="{{ route('producten.show', $leverancier->Id) }}" class="btn btn-primary">Toon Producten</a>
                </td>
            </tr>
        @endforeach
    </tbody>

            </table>
        </div>
        <a href="{{ url('/') }}" style="float: right; margin-right: 200px;">Home</a>
