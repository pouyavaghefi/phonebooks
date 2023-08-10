<section class="container-fluid bg-auth-form d-flex justify-content-center align-items-center">
    <section class="row bg-gradiant-green-blue">
        <section class="col-12 bg-white p-5 rounded BKoodakBold">
            <h2 class="h5 pb-3" style="text-align:right !important">ثبت نام حساب کاربری</h2>
            <form method="POST" action="{{ route('auth.register') }}">
                @csrf

                <div class="form-group">
                    <label for="fname" class="right-floated">نام</label>
                    <input type="text" class="form-control" id="fname" name="fname" required="required">
                    @error('fname')
                    <span class="text-danger right-floated">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lname" class="right-floated">نام خانوادگی</label>
                    <input type="text" class="form-control" id="lname" name="lname" required="required">
                    @error('lname')
                    <span class="text-danger right-floated">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="right-floated">ایمیل</label>
                    <input type="email" class="form-control" id="email" name="email" required="required">
                    @error('email')
                    <span class="text-danger right-floated">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="right-floated">رمز عبور</label>
                    <input type="password" class="form-control" id="password" name="password" required="required">
                    @error('password')
                    <span class="text-danger right-floated">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="right-floated">تایید رمز عبور</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required="required">
                    @error('password_confirmation')
                    <span class="text-danger right-floated">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-sm btn-primary BJadidBold" class="right-floated">ثبت نام</button>
            </form>
        </section>
    </section>
</section>
