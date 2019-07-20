@extends ('layouts.app')
@section('title')

@section('adminBar')
 Вітаємо,
 @if(Auth::check())
     {{Auth::user()->name}}
     @else гість
    @endif
@endsection

@section('content')
{{--    v 1.2   --}}
        @if(isset($page))
            {{$pages->firstWhere('page_id',$page->page_id )->page_text}}
        @else
            {{$pages->firstWhere('page_id',1 )->page_text}}
    @endif
@endsection


