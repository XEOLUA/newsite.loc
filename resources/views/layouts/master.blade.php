@extends ('layouts.app')
@section('title')

@section('content')
        @if(isset($page))
            {{$pages->firstWhere('page_id',$page->page_id )->page_text}}
        @else
            {{$pages->firstWhere('page_id',1 )->page_text}}
    @endif
@endsection


