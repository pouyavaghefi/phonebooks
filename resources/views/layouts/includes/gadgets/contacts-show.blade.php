<div class="row BKoodakBold text-aligned">
    <div class="col-12">
        <div class="row">
            <div class="col-6 mt-4">
                <h2 class="h6 BHoma">
                    مشاهده مخاطب
                    <u>
                        {{ $contact->first_name }}
                    </u>
                </h2>
            </div>
            <div class="col-6">
                <x-phonebook-link />
                <div style="float:left">
                    <a href="{{ route('panel.phonebooks.show', $contact->phonebook_id) }}" class="btn btn-info BJadidBold">همه مخابین این دفترچه</a>
                </div>
            </div>
        </div>
        <div class="">
            <p><strong>شماره های ثبت شده:</strong></p>
            @foreach($contact->numbers as $number)
                <p>{{ $number->full_number }}</p>
            @endforeach
            <hr>
            <p><strong>ایمیل های ثبت شده:</strong></p>
            @forelse($contact->emails as $email)
                <p>{{ $email->email_address }}</p><br>
        ÷   @empty
                <p>هنوز ایمیلی ثبت نشده است</p>
            @endforelse
            <hr>
            <p><strong>آدرس های ثبت شده:</strong></p>
            @forelse($contact->addresses as $address)
                <p>{{ $address->location }}</p><br>
            @empty
                <p>هنوز آدرسی ثبت نشده است</p>
            @endforelse
            <hr>
            <p><strong>ثبت شده در:</strong></p>
            <p>{{ $contact->created_at }}</p>
        </div>
    </div>
</div>
