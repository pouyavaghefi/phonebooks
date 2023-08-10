<div class="row BKoodakBold text-aligned">
    <div class="col-12">
        <div class="row">
            <div class="col-6 mt-4">
                <h2 class="h6 BHoma">
                    همه دفترچه تلفن های شما
                </h2>
            </div>
            <div class="col-6">
                <div style="float:left">
                    <a href="{{ route('panel.phonebooks.add') }}" class="btn btn-secondary BJadidBold">ایجاد دفترچه تلفن جدید</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>نوع</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @php($menuCounter = 0)
                @forelse($phonebooks as $phonebook)
                    <tr>
                        <td>{{ ++$menuCounter }}</td>
                        <td><a href="{{ route('panel.phonebooks.show', $phonebook->id) }}">{{ $phonebook->name }}</a></td>
                        <td>{{ $phonebook->type }}</td>
                        <td>{{ $phonebook->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('panel.phonebooks.edit', $phonebook->id) }}" class="btn btn-sm btn-warning">ویرایش</a>
                                <a href="{{ route('panel.phonebooks.show', $phonebook->id) }}" class="btn btn-sm btn-success">مشاهده</a>
                                <form action="{{ route('panel.phonebooks.delete', $phonebook->id) }}" method="POST">
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
                            هنوز هیچ دفترچه تلفنی ایجاد نشده است
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
