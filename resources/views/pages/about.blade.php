@extends('layouts.app')

@section('content')
    @include('components.card', [
        'imgsrc' => '/images/blog/gonggong.jpg', 
        'title' => 'Noteworthy technology acquisitions 2021',
        'desc' => 'Here are the biggest enterprise technology acquisitions of 2021 so far...'
    ])
    
    @include('components.card', [
        'imgsrc' => '/images/blog/gonggong.jpg', 
        'title' => 'Tech Acquisitions 2022',
        'desc' => 'The major acquisitions in the tech world during 2022...'
    ])
@endsection
