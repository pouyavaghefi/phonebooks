<div class="row BKoodakBold text-aligned">
    <div class="col-12">
        <div class="row">
            <div class="col-6 mt-4">
                <h2 class="h6 BHoma">
                    ویرایش دفترچه تلفن
                    <u>
                    {{ $phonebook->name }}
                    </u>
                </h2>
            </div>
            <div class="col-6">
                <x-phonebook-link />
            </div>
        </div>
        <div class="">
            <form method="POST" action="{{ route('panel.phonebooks.edit',$phonebook->id) }}">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="name">نام دفترچه تلفن</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $phonebook->name }}" required>
                </div>

                <div class="form-group">
                    <label for="type">
                        نوع دفترچه تلفن
                        <a href="javascript:void(0);" onclick="showAddCategoryPopup()">
                            <i>
                                افزودن به لیست
                            </i>
                        </a>
                    </label>
                    <select class="form-control" id="type" name="type" required>
                        @foreach(\App\Models\PhonebookCategory::all() as $cat)
                            <option value="{{ $cat->id }}" @if($phonebook->phonebook_category_id == $cat->id) selected @endif>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-dark BJadidBold">ثبت و ادامه</button>
            </form>
        </div>
    </div>
</div>
