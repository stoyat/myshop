<!--Шаблон для вывода меню с использованием рекурсии-->
@foreach($items as $item)
    <!--Добавляем класс active для активного пункта меню-->
       <a>{{ $item->title }}</a>
    @if($item->hasChildren())
        <ul class="sub-menu">
            <!--метод children() возвращает дочерние пункты меню для текущего пункта-->
            <h3>@include('pages.test', ['items'=>$item->children()])</h3>
        </ul>
    @endif

@endforeach
