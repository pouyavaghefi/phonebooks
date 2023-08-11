@extends('layouts.master')

@section('title', 'Your all phonebooks')

@section('wrapper')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" dir="rtl">
        @include('layouts.includes.gadgets.phonebooks-tbl')
    </main>
@endsection

@section('scripts')
<script>
    function confirmDelete(contactCount) {
        if (contactCount > 0) {
            return confirm('این دفترچه تلفن دارای مخاطب است، ایا از حذف آن اطمینان دارید؟');
        }
        return true;
    }
</script>
@endsection
