<div class="row BKoodakBold text-aligned">
    <div class="col-12">
        <div class="row">
            <div class="col-6 mt-4">
                <h2 class="h6 BHoma">
                    اضافه کردن مخاطب جدید
                </h2>
            </div>
            <div class="col-6">
                <x-phonebook-link />
            </div>
        </div>
        <div class="">
            <form method="POST" action="{{ route('panel.contacts.new') }}">
                @csrf

                <div id="dynamic_field">
                    <div class="form-group">
                        <label for="phone_book">انتخاب دفترچه تلفن
                            <a href="{{ route('panel.phonebooks.add') }}">
                                <i>
                                اضافه کردن دفترچه تلفن
                                </i>
                            </a>
                        </label>
                        <select class="form-control" id="phone_book" name="phone_book">
                            @foreach(\App\Models\Phonebook::all() as $phonebook)
                                <option value="{{ $phonebook->id }}">{{ $phonebook->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="first_name">نام</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">نام خانوادگی</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>

                    <div class="form-group">
                        <label for="address">آدرس</label>
                        <input type="text" class="form-control" id="address" name="address[]">
                    </div>

                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="text" class="form-control" id="email" name="email[]">
                    </div>

                    <div class="form-group">
                        <label for="number">شماره</label>
                        <input type="text" class="form-control" id="number" name="number[]" required>
                    </div>

                    <div class="form-group">
                        <a id="add" class="btn btn-success">اضافه کردن فیلدهای جدید</a>
                    </div>

                    <button type="submit" class="btn btn-dark BJadidBold">ثبت</button>
                </div>
            </form>
        </div>
    </div>
</div>
