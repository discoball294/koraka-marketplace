<ul class="menu">
    @if(Auth::check())
        <li class="has-dropdown">
            <a href="#">{{ Auth::user()->name }}</a>
            <ul>
                <li>
                    <a href="#">Profile</a>
                </li>
                @if($user->myStore()->exists())
                    <li>
                        <a href="{{ route('storefront.mystore',$user->myStore()->first()->url_toko) }}">Toko</a>
                    </li>
                    <li>
                        <a href="{{ route('jual.index') }}">Penjualan</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('mystore.create') }}">Buka Toko</a>
                    </li>
                @endif
                <li>
                    <a href="{{ route('beli.index') }}">Pembelian</a>
                </li>
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">{{ csrf_field() }}</form>
                </li>
            </ul>
        </li>
    @else
        <li>
            <a href="{{ route('login') }}">Login</a>
        </li>
    @endif

</ul>