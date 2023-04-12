<div class="topbar">
    <div class="toggle">
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <div class="search_wrapper">
        <label>
            <span>
                <i class='bx bx-search'></i>
            </span>
            <input type="search" placeholder="Search...">
        </label>
    </div>
    <div class="user_wrapper">
        <span>{{ Auth::user()->username }}</span>
        <img src="{{ asset('user/' . Auth::user()->avatar) }}" alt="">
    </div>
</div>
