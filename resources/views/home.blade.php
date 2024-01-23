@extends('layouts.app')

@section('content')
    <h1>Treni</h1>

    @foreach ($treni as $treno)
        <ul>
            <span>Treno numero: {{ $treno->id }}</span>
            <li>
                <span>Azienda: {{ $treno->company }}</span>
            </li>
            <li>
                <span>Stazione di partenza: {{ $treno->start }}</span>
            </li>
            <li>
                <span>Stazione di arrivo: {{ $treno->end }}</span>
            </li>
            <li>
                <span>Orario di partenza: {{ $treno->departure }}</span>
            </li>
            <li>
                <span>Orario di arrivo: {{ $treno->arrival }}</span>
            </li>
            <li>
                <span>Codice treno: {{ $treno->train_code }}</span>
            </li>
            <li>
                <span>In orario: {{ $treno->is_on_time ? 'Si' : 'No' }}</span>
            </li>
            <li>
                <span>Cancellato: {{ $treno->is_late === 0 ? 'No' : 'Si' }}</span>
            </li>
        </ul>
    @endforeach
@endsection
