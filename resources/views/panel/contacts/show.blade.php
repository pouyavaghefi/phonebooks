@extends('layouts.master')

@section('title', 'Show contact')

@php
    use App\View\Components\PhonebookLink;
    use App\View\Components\PhonebookContactsLinks2;
@endphp

@section('wrapper')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" dir="rtl">
        @include('layouts.includes.gadgets.contacts-show')
    </main>
@endsection
