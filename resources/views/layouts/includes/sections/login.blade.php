<section class="container-fluid bg-auth-form d-flex justify-content-center align-items-center">
    <section class="row bg-gradiant-green-blue">
        <section class="col-12 bg-white p-5 rounded BKoodakBold">
            <h2 class="h5 pb-3" style="text-align:right !important">ورود به حساب کاربری</h2>
            <form method="POST" action="{{ route('auth.login') }}">
                @csrf

                <div class="form-group">
                    <label for="email" style="float:right">ایمیل</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" style="float:right">رمز</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-sm btn-primary BJadidBold" style="float:right">ورود</button>
            </form>
        </section>
    </section>
</section>
