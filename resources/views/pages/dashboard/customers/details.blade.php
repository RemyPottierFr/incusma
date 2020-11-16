@extends("layouts.app")

@section('content')
    <div class="flex flex-col py-12 px-8">
        <div class="flex item-center mb-8">
            <a href="{{ route('customers') }}" class="btn-primary text-xl">
                <i class="fas fa-angle-left"></i>
                Précédent
            </a>
            <div class="flex item-end"><span
                    class="text-4xl ml-4 text-secondary font-semibold">{{ $customer->name }}</span></div>
        </div>
        <div class="flex w-full justify-between">
            <div class="w-full md:w-1/2 flex flex-col">
                <panel-customer-missions customerid="{{ $customer->id }}"></panel-customer-missions>
                <div class="flex flex-col">
                    <h3 class="text-2xl text-primary my-4">
                        Dernière missions
                    </h3>
                    @forelse($customer->missions as $mission)
                        <div class="flex items-start justify-between my-2">
                            <div class="flex flex-col">
                                <span
                                    class="text-light text-xl">Le {{ $mission->updated_at->format('d/m/Y') }} - {{ $mission->status }}</span>
                                <a href="{{ route('mission_details', ["id"=>$mission->id]) }}"
                                   class="text-primary">{{ $mission->name }}</a>
                            </div>
                            <span class="text-secondary text-xl">{{ $mission->amount }} €</span>
                        </div>
                    @empty

                    @endforelse
                    <div></div>
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <panel-customer-papers customerid="{{ $customer->id }}"></panel-customer-papers>
            </div>
        </div>
    </div>
@endsection
