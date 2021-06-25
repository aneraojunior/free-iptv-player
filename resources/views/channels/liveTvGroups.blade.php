@extends('layouts.videostream.main')

@section('title')
    Channels
@endsection

@section('content')
    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Live Tv Groups</h2>
                <ul>
                    <li> <a href="{{ route('index') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Live TV Groups</li>
                </ul>
            </div>
        </div>
    </div>

    <!--####################### Trending Starts Here ###################-->
    <div class="treanding-video container-fluid">
        <div class="container">
            <div class="row video-title no-margin">
                <h6><i class="fas fa-book"></i> {{ $channels->total() }} Live TVs groups found</h6>
            </div>
            <div class="video-row row">
                @foreach($channels as $channel)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="video-card">
                            <img src="{{ $channel->tvlogo }}" onerror="this.src='https://www.leilomaster.com.br/sem-imagem.png'">

                            <div class="row details no-margin">
                                <h6><a href="{{ route('groups.channels', $channel->tvgroup) }}">{{ $channel->tvgroup }}</a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12">
                    {{ $channels->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection
