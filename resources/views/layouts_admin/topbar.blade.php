<div class="topbar">
    <div class="toggle">
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <div class="search_wrapper">
        <label>
            <input type="search" class="form-control light-table-filter px-3" data-table="table" placeholder="Cari...">
        </label>
    </div>
    <div class="user_wrapper">
        <img src="{{ asset('user/' . Auth::user()->avatar) }}" alt="">
    </div>
</div>
