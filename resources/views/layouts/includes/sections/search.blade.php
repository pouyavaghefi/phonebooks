<div class="row BKoodakBold pt-4">
    <div class="container-fluid"> <!-- Use container-fluid for full-width -->
        <form method="GET" class="text-aligned">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="search">جستجو بر اساس نام یا نام‌خانوادگی</label>
                        <input type="text" class="form-control" name="search" value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-dark white-color">جستجو</button>
                </div>
            </div>
        </form>
    </div>
</div>
