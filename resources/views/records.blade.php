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
    <a href="{{ route('records') }}" class="nav__link active">Платівки</a>
@endsection

@section('footers')
    <a href="{{ route('footer') }}" class="nav__link">Контакти</a>
@endsection

@section('secondContainer')
    @extends('layouts.records.secondContaninerRecords')
@endsection

@section('firstContainer')
    @extends('layouts.records.firstContainerRecords')
@endsection

@section('catalog')
    @extends('layouts.records.catalogRecords')
@endsection

@section('filter')
    @extends('layouts.records.filterRecords')
@endsection

@section('mainPhoto')
    @extends('layouts.records.mainPhotoRecords')
@endsection

