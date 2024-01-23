@extends('layouts.app')

@section('content')
    <h1>Treni</h1>
    <ul>
        @foreach ($treni as $treno)
            <li>
                <span>{{ $treno->company }}</span>
            </li>
            <li>
                <span>{{ $treno->start }}</span>
            </li>
            <li>
                <span>{{ $treno->end }}</span>
            </li>
            <li>
                <span>{{ $treno->departure }}</span>
            </li>
            <li>
                <span>{{ $treno->arrival }}</span>
            </li>
            <li>
                <span>{{ $treno->train_code }}</span>
            </li>
            <li>
                <span>{{ $treno->is_on_time }}</span>
            </li>
            <li>
                <span>{{ $treno->is_late }}</span>
            </li>
        @endforeach
    </ul>
@endsection
