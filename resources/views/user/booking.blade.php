@extends('user.layout.app')

@section('container')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="t title"><h4>Booking</h4></div>

            <div class="card-columns">
                @foreach ($data as $item)
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$item->jenis_paket}}</h4>
                            <p class="card-text">Harga : {{$item->cost}}</p>
                            <a href="/booking/{{$item->id}}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    
</div>
@endsection
