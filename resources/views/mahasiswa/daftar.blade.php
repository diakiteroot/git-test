@extends('layouts.app')

@section('title','Liste des étudiants')

@section('content')
<h1>Liste des étudiants</h1>
<table border="1">
<tr><th>No</th><th>Nom</th><th>NIM</th><th>IPK</th><th>Remarque</th><th>Action</th></tr>
@forelse($mahasiswa as $mhs)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $mhs['nama'] }}</td>
    <td>{{ $mhs['nim'] }}</td>
    <td>{{ $mhs['ipk'] }}</td>
    <td>
        @if($mhs['ipk'] >= 3.5) Cum Laude
        @elseif($mhs['ipk'] >= 3.0) Bien
        @else À améliorer
        @endif
    </td>
    <td><a href="{{ route('mahasiswa.detail', $mhs['nim']) }}">Détail</a></td>
</tr>
@empty
<tr><td colspan="6">Pas de données</td></tr>
@endforelse
</table>

{{-- Alerte si IPK < 2.0 --}}
@foreach($mahasiswa as $mhs)
    @if($mhs['ipk'] < 2.0)
        <x-alert type="danger">
            Attention : {{ $mhs['nama'] }} a un GPA inférieur à 2.0 !
        </x-alert>
    @endif
@endforeach
@endsection
