@extends('user.layout.app')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="card-columns w-100">
            <div class="card w-100">
                <div class="title p-3">
                    <span style="font-size: 20px">Edit Pesanan</span>
                </div>
                <div class="card-body">
                    <form action="/booking_user/{{ $result[1]['id'] }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                          <label for="">Jenis Paket</label>
                          <select class="form-control" name="jenis" id="jenis" class="country">
                            <option value="1" @if ($result[0]->id == '1')
                                selected
                            @endif>Nginap + Makan</option>
                            <option value="2" @if ($result[0]->id == '2')
                                selected
                            @endif>Trip + Makan + Nginap</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="">Check In</label>
                            <input type="date" name="check_in" id="check_in" class="form-control datepicker" data="check_in" placeholder="" aria-describedby="helpId" value="{{$result[1]['check_in']}}">
                            @error('check_in')
                                <div class="invalid-feedback d-inline">{{$message}}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Check Out</label>
                            <input type="date" name="check_out" id="check_out" class="form-control datepicker" placeholder="" aria-describedby="helpId" value="{{$result[1]['check_out']}}">
                            @error('check_out')
                                <div class="invalid-feedback d-inline">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group d-block">
                            Price : {{$result['0']->cost}} <br><br>
                            <input type="hidden" name="cost" value="{{$result[0]->cost}}">
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection

@section('script')
@endsection