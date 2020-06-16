@extends('admin.layout.app')

@section('container')
<div class="title-index">
    <p class="title">Dashboard</p>
</div>
<div class="container">
    <div class="dashboard">
        <div class="box-count">
            <div class="box-content">
                <div class="sticker">
                    <a class="students"><i class="fas fa-user-circle students"></i></a>
                </div>
                <div class="counter">
                    <div class="counter-content">
                        <span>{{ $data }}</span>
                        <span>Avaiable User</span>
                    </div>
                </div>
            </div>
            <div class="box-content">
                <div class="sticker">
                    <i class="fas fa-book  students"></i>
                </div>
                <div class="counter">
                    <div class="counter-content">
                        <span>{{ $pesanan }}</span>
                        <span>Pesanan</span>
                    </div>
                </div>
            </div>
            <div class="box-content">
                <div class="sticker">
                    <i class="fas fa-trophy students"></i>
                </div>
                <div class="counter">
                    <div class="counter-content">
                        <span>3</span>
                        <span>Post</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grafik-index p-0" style="height: 300px">
            <div class="grafik-1 graph-index">
                <div class="title-grafik p-0 position-relative bg-blue">
                    <span>Visitor</span>
                </div>
                <div class="grafik-content">
                    <canvas id="myCharts"></canvas>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection

@section('javascript')
    <script src="{{asset("js/chart_admin.js")}}"></script>
@endsection
