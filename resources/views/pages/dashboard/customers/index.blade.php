@extends("layouts.app")

@section('content')
    <div class="flex flex-col px-6">
        <div class="flex justify-between items-end py-8">
            <h1 class="text-4xl m-0">Liste des clients</h1>
            <button class="btn-primary text-xl">Ajouter un client</button>
        </div>
        <div>
            <board route="{{ route('customers') }}"></board>
        </div>
    </div>
@endsection
