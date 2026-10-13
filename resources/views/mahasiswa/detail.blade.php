@extends('layouts.app')

@section('title','Détail Étudiant')

@section('content')
<h1>Détail Étudiant</h1>
<p>NIM : {{ $nim }}</p>
<p>Nom : {{ $data['nama'] }}</p>
<p>IPK : {{ $data['ipk'] }}</p>
@endsection
