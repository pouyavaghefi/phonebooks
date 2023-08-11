<div class="row BKoodakBold text-aligned">
    <div class="col-12">
        <div class="row">
            <div class="col-6 mt-4">
                <h2 class="h6 BHoma">
                    ویرایش مخاطب
                    <u>
                        {{ $contact->first_name }}
                    </u>
                </h2>
            </div>
            <div class="col-6">
                <x-phonebook-contacts-links2 :contact="$contact" />
            </div>
        </div>
        <div class="">
            <form method="POST" action="{{ route('panel.contacts.edit',$contact->id) }}">
                @csrf
                @method('PATCH')

                <div id="dynamic_field">
                    <div class="form-group">
                        <label for="first_name">نام</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $contact->first_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">نام خانوادگی</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $contact->last_name }}">
                    </div>

                    @foreach($contact->addresses as $address)
                    <div class="form-group">
                        <label for="address">آدرس
                            {{ $loop->iteration }}
                        </label>
                        <input type="text" class="form-control" id="address" name="address[]" value="{{ $address->location }}">
                    </div>
                    @endforeach

                    @foreach($contact->emails as $email)
                    <div class="form-group">
                        <label for="email">ایمیل
                            {{ $loop->iteration }}
                        </label>
                        <input type="text" class="form-control" id="email" name="email[]" value="{{ $email->email_address }}">
                    </div>
                    @endforeach

                    @foreach($contact->numbers as $number)
                    <div class="form-group">
                        <label for="number">شماره
                            {{ $loop->iteration }}
                        </label>
                        <input type="text" class="form-control" id="number" name="number[]" required value="{{ $number->full_number }}">
                    </div>
                    @endforeach

                    <div class="form-group">
                        <a id="add" class="btn btn-success">اضافه کردن فیلدهای جدید</a>
                    </div>

                    <button type="submit" class="btn btn-dark BJadidBold">ثبت</button>
                </div>
            </form>
        </div>
    </div>
</div>
