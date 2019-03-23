@extends('layouts.index')
@section('wrapper-title')
    <h2># Edit</h2>
@endsection
@section('wrapper')
    <form method="post" action="{{route('notices.update', $notice->id)}}">
        @csrf
        @method('PATCH')
        <div>
            <label for="ntitle">제목</label>
            <input id="ntitle" type="title" class="form-control" name="title" value="{{$notice->title}}">
            <br>

            <label for="ncontent">본문</label>
            <textarea id="ncontent" name="description">{{$notice->description}}</textarea>
        </div>

        <div>
            <input type="submit" value="수정">
        </div>
    </form>
@endsection
