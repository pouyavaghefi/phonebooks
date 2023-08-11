<div class="row mt-3 text-aligned BKoodakBold">
    <div class="col-sm-6 col-lg-3">
        <a href="{{ route('panel.phonebooks.all') }}"><div class="card text-white bg-neon-life mb-3" style="max-width: 18rem;">
            <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-newspaper"></i></span>  <span class="badge badge-pill right">{{ (\App\Models\Phonebook::count()) }}</span></div>
            <div class="card-body">
                <h5 class="card-title">همه دفترچه تلفن های شما</h5>
                <p class="card-text white-color">با ایجاد دفترچه تلفن های مختلف، مخاطب های خود را دسته بندی کنید</p>
            </div>
        </div></a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="{{ route('panel.contacts.all') }}"><div class="card text-white bg-dracula mb-3" style="max-width: 18rem;">
            <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-users"></i></span>  <span class="badge badge-pill right">{{ (\App\Models\Contact::count()) }}</span></div>
            <div class="card-body">
                <h5 class="card-title">همه مخاطب های شما</h5>
            </div>
        </div></a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="{{ route('panel.contacts.new') }}"><div class="card text-white bg-gradiant-green-blue mb-3" style="max-width: 18rem;">
            <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-users"></i></span></div>
            <div class="card-body">
                <h5 class="card-title">اضافه کردن مخاطب جدید</h5>
            </div>
        </div></a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="{{ route('panel.phonebooks.add') }}"><div class="card text-white bg-juicy-orange mb-3" style="max-width: 18rem;">
            <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-newspaper"></i></span></div>
            <div class="card-body">
                <h5 class="card-title">ایجاد دفترچه تلفن</h5>
            </div>
        </div></a>
    </div>
</div>
