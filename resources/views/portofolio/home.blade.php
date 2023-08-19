@extends('template.index')

@section('title')
    Home
@endsection

@section('content')
    <!--Hero-->
    <section class="jumbotron text-center">
        <img src="{{ asset('assets/images/WhatsApp Image 2023-08-01 at 11.07.41.jpeg') }}" height="300" alt="aaa" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Bagas Rizky Putra Wardana</h1>
        <p class="lead">12 RPL 1 | Absen 16</p>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,192C480,181,600,139,720,144C840,149,960,203,1080,218.7C1200,235,1320,213,1380,202.7L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
    <!--End of hero-->
@endsection