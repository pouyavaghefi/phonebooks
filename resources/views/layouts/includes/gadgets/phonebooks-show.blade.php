<div class="row BKoodakBold text-aligned">
    <div class="col-12">
        <div class="row">
            <div class="col-6 mt-4">
                <h2 class="h6 BHoma">
                    دفترچه تلفن
                    <u>
                    {{ $phonebook->name }}
                    </u>
                </h2>
            </div>
            <div class="col-6">
                <x-phonebook-link />
                <div style="float:left">
                    <a href="{{ route('panel.contacts.add',$phonebook->id) }}" class="btn btn-success BJadidBold">اضافه کردن مخاطب</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>شماره ها</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @php($menuCounter = 0)
                @forelse($phonebook->contacts as $contact)
                    <tr>
                        <td>{{ ++$menuCounter }}</td>
                        <td><a href="{{ route('panel.contacts.show', $contact->id) }}">{{ $contact->first_name }}</a></td>
                        <td>{{ $contact->last_name }}</td>
                        <td>
                        @foreach($contact->numbers as $number)
                            {{ $number->full_number }} <br>
                        @endforeach
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('panel.contacts.edit', $contact->id) }}" class="btn btn-sm btn-warning">ویرایش</a>
                                <a href="{{ route('panel.contacts.show', $contact->id) }}" class="btn btn-sm btn-dark white-color">مشاهده</a>
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
                            هنوز هیچ مخاطبی به این دفترچه تلفن اضافه نشده است
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
