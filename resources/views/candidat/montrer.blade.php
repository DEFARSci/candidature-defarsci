@extends('layouts.app')

@section('content')

<div class="conatiner">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{session('success')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-info text-white">Document</div>
        <div class="card-body">

                @csrf

                {{-- <a href="{{ asset('files/file.pdf') }}">Open the pdf!</a> --}}

                @if (file_exists(public_path('storage/assets/myfile.pdf')))
                    <iframe height="600" width="600" src="{{ asset("storage/assets/$candidat->myfile") }}"></iframe>
                @else
                    <div class="alert alert-danger">Le fichier PDF est introuvable</div>
                @endif

                {{-- <h1>{{ $candidat->myfile }}</h1> --}}

                {{-- @if (file_exists(storage_path('app/public/assets/myfile.pdf')))
                    <iframe height="600" width="600" src="{{ asset('storage/assets/myfile.pdf') }}"></iframe>
                @else
                    <div class="alert alert-danger">Le fichier PDF est introuvable</div>
                @endif --}}




                {{-- <iframe height="600" width="600" src="{{ ('files/file.pdf') }}" ></iframe> --}}
        </div>
    </div>
</div>

@endsection
