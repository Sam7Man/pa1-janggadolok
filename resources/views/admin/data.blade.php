@extends('admin.layout.app')

@section('container')
<div class="title-index">
    <p class="title">List Booking</p>
</div>
<div class="container">
    <div class="dashboard px-4">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th style="width: 10px !important">#</th>
                    <th>Paket</th>
                    <th>Name</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Cost</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td style="width: 10px !important">{{$loop->iteration}}</td>
                            <td>{{$item->jenis_paket}}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ date('d M Y', strtotime($item->check_in)) }}</td>
                            <td>{{ date('d M Y', strtotime($item->check_out)) }}</td>
                            <td>{{ $item->Total }}</td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection

@section('javascript')
    <script src="{{asset("js/chart_admin.js")}}"></script>
@endsection
