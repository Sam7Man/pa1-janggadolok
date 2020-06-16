@extends('user.layout.app')

@section('container')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="t title"><h4>Booking</h4></div>

            <div class="card-columns w-100">
                    <div class="card w-100">
                        <div class="card-body">
                            <h4 class="card-title">{{$booking['jenis_paket']}}</h4>
                            <form action="/booking/{{ $booking['id'] }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Check In</label>
                                    <input type="date" name="check_in" id="check_in" class="form-control datepicker" data="check_in" placeholder="" aria-describedby="helpId">
                                    @error('check_in')
                                        <div class="invalid-feedback d-inline">{{$message}}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Check Out</label>
                                    <input type="date" name="check_out" id="check_out" class="form-control datepicker" placeholder="" aria-describedby="helpId">
                                    @error('check_out')
                                        <div class="invalid-feedback d-inline">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group d-block">
                                    Harga : {{$booking['cost']}} <br><br>
                                    <input type="hidden" name="jenis" value="{{$booking['id']}}">
                                    <input type="hidden" name="cost" value="{{$booking['cost']}}">
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    
</div>
@endsection

@section('script')
    <script>
        $('#tanggal_masuk').on('click', function(){
            console.log('damn');
        })
    </script>
@endsection