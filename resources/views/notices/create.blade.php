@extends('layouts.index')
@section('wrapper-title')
    <h2># Create</h2>
@endsection
@section('wrapper')
    <div class="create-form">
        <form method="post" action="{{route('notices.store')}}">
            @csrf
            <div>
                <label for="ntitle">제목</label>
                <input id="ntitle" type="title" class="form-control" name="title" value="{{Request::old('title')}}">
                <br>

                <label for="ncontent">본문</label>
                <textarea id="ncontent" name="description">{{Request::old('description')}}</textarea>
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </div>
@endsection
