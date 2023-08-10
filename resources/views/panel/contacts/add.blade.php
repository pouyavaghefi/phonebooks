@extends('layouts.master')

@section('title', 'Add new contact')

@php
    use App\View\Components\PhonebookLink;
@endphp

@section('wrapper')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" dir="rtl">
        @include('layouts.includes.gadgets.contacts-add')
    </main>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            var i = 1;
            var j = 1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<hr><div class="form-group"><label for="address">آدرس '+i+'</label><input type="text" class="form-control" id="address' + i + '" name="address[]"></div><div class="form-group"><label for="email">ایمیل ' + i + '</label><input type="text" class="form-control" id="email' + i + '" name="email[]"></div><div class="form-group"><label for="number">شماره'+i+'</label><input type="text" class="form-control" id="number'+i+'" name="number[]"></div>');
            });
        });
    </script>
@endsection
