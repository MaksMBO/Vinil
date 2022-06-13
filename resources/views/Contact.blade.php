@extends("layouts.app")

@section('header')
    @extends('layouts.header')
@endsection

@section('footer')
    @extends('layouts.footer')
@endsection

@section('main_page')
    <a href="{{ route('lending') }}" class="nav__link">Головна</a>
@endsection

@section('turntables_page')
    <a href="{{ route('turntables') }}" class="nav__link">Програвачі</a>
@endsection

@section('records_page')
    <a href="{{ route('records') }}" class="nav__link">Платівки</a>
@endsection

@section('footers')
    <a href="{{ route('footer') }}" class="nav__link active">Контакти</a>
@endsection
