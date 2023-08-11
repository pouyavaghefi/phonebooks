<div class="row BKoodakBold text-aligned">
    <div class="col-12">
        <div class="row">
            <div class="col-6 mt-4">
                <h2 class="h6 BHoma">
                    همه مخاطبین شما
                </h2>
            </div>
            <div class="col-6">
                <x-phonebook-link />
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>نام دفترچه تلفن مرتبط</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @php($menuCounter = 0)
                @forelse($contacts as $contact)
                    <tr>
                        <td>{{ ++$menuCounter }}</td>
                        <td>{{ $contact->first_name }}</td>
                        <td>{{ $contact->phonebook->name }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('panel.contacts.edit', $contact->id) }}" class="btn btn-sm btn-primary">ویرایش</a>
                                <form action="{{ route('panel.contacts.delete', $contact->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            @if(request('search'))
                                هیچ نتیجه‌ای برای "{{ request('search') }}" پیدا نشد.
                            @else
                                هنوز هیچ مخاطبی اضافه نشده است
                            @endif
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
