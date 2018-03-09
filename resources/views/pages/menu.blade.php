
@section('menu')
    test
    @if($menu)
        <div class="menu classic">
            <ul id="nav" class="menu">
                <!--$menu->roots() - получаем только родительские элементы меню-->
                @include('pages.customMenuItems', ['items'=>$menu->roots()])
            </ul>
        </div>
    @endif
@endsection