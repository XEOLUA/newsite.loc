@inject('pages', 'App\Services\Navigation')

@foreach ($pages->show() as $page_v)
    <ul class="nav-link">
        <a class="nav-link" href="{{route('showPage',['id'=>$page_v->page_id])}}">{{$page_v->page_title}}</a>
    </ul>
    @endforeach
