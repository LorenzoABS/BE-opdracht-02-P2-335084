@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Producten van {{ $leverancier->naam }}</h1>
    
    @if ($producten->isEmpty())
        <p>Er zijn geen producten beschikbaar voor deze leverancier.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Prijs</th>
                    <th>Beschrijving</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($producten as $product)
                    <tr>
                        <td>{{ $product->naam }}</td>
                        <td>€{{ number_format($product->prijs, 2) }}</td>
                        <td>{{ $product->beschrijving }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ url('/leveranciers') }}" class="btn btn-secondary">Terug naar Leveranciers</a>
</div>
@endsection
