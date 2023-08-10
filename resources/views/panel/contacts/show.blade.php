@extends('layouts.master')

@section('title', 'Add new contact')

@php
    use App\View\Components\PhonebookLink;
@endphp

@section('wrapper')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" dir="rtl">
        @include('layouts.includes.gadgets.contacts-show')
    </main>
@endsection