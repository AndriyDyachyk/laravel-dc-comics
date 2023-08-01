<header>
    <div class="container">
        <a href="{{ url('/') }}"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="" class="logo"></a>

        <ul>
            @foreach($menus as $menu)
            <li @mouseover="{{ $menu['active']}} = true" @mouseout="{{ $menu['active']}} = false" class="[ {{ $menu['active']}} === true ? 'active' : '']">
                <a href="menu.url" > {{ $menu['text']}} </a>
            </li >
            @endforeach
        </ul>

        <input type="text" placeholder="Search">
    </div>
</header>