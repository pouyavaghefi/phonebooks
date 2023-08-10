@extends('layouts.master')

@section('title', 'Add new phonebook')

@php
    use App\View\Components\PhonebookLink;
@endphp

@section('wrapper')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" dir="rtl">
        @include('layouts.includes.gadgets.phonebooks-add')
    </main>
@endsection

@section('scripts')
<script>
    function showAddCategoryPopup() {
        Swal.fire({
            title: 'افزودن دسته‌بندی جدید',
            input: 'text',
            showCancelButton: true,
            confirmButtonText: 'ثبت',
            cancelButtonText: 'لغو',
            customClass: {
                confirmButton: 'BJadidBold',
                cancelButton: 'BJadidBold'
            },
            inputValidator: (value) => {
                if (!value) {
                    return 'لطفاً نام دسته‌بندی را وارد کنید'
                }
            }
        }).then((result) => {
            if (result.value !== undefined) {
                const categoryName = result.value;

                $.ajax({
                    method: 'POST',
                    url: '{{ route('panel.phonebooks.add-category') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        name: categoryName
                    },
                    success: function(response) {
                        window.location.reload();
                        // console.log('Category added successfully');
                    },
                    error: function(jqXHR) {
                        // var statusCode = jqXHR.status;
                        //
                        // if (statusCode === 500) {
                        //     console.log('Error adding category');
                        //
                        //     if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                        //         console.log('Server Error: ' + jqXHR.responseJSON.message);
                        //     }
                        // } else {
                        //     console.log('Unexpected status code: ' + statusCode);
                        // }
                    }
                });
            }
        });
    }
</script>
@endsection
