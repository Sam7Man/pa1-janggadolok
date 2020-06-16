@extends('user.layout.app')

@section('container')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="title"><h4>List Booking</h4></div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Jenis Paket</th>
                        <th>Cost</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Tanggal Pemesanan</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td scope="row">{{$item->jenis_paket}}</td>
                                <td>{{$item->cost}}</td>
                                <td>{{ date('d M Y', strtotime($item->check_in)) }}</td>
                                <td>{{ date('d M Y', strtotime($item->check_out)) }}</td>
                                <td>{{ date('d M Y', strtotime($item->created_at)) }}</td>
                                <td><a href="/edit/detail/{{$item->id}}" class="btn btn-warning text-light">Edit</a></td>
                                <td>
                                    <form action="/delete/detail/{{$item->id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger text-light">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>

    
</div>
@endsection
