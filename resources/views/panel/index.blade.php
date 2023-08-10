@extends('layouts.master')

@section('wrapper')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @include('layouts.includes.gadgets.cards')
        @include('layouts.includes.gadgets.tables')
    </main>
@endsection
