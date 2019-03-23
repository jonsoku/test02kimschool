@extends('layouts.index')
@section('wrapper-title')
    <h2># Notice</h2>
@endsection
@section('wrapper')
    <style>
        .notice-boxes{
            display:grid;
            grid-template-columns: 1fr;
            grid-gap: 30px;
        }



        .notice-box{
            box-shadow: var(--shadow);
        }

        .notice-info {
            margin : 1rem;
        }
        .notice-info span{
            margin-right:1rem;
        }
        .notice-info span i{
            margin-right: 1rem;
        }

        .notice-title{
            margin: 1rem;
            font-size: 1.4rem;
            font-weight: 900;
        }
        .notice-desc{
            margin: 1rem;
        }

    </style>
    <div class="notice-write">
        <a href="notices/create">작성</a>
    </div>
    <div class="notice-boxes">
        <div class="notice-boxes">
        @foreach($notices as $notice)
                <div class="notice-box">
                    <div class="notice-info">
                        <span>No. {{$notice->id}}</span>
                        <span><i class="fas fa-user"></i>{{$notice->user->name}}</span>
                        <span><i class="far fa-calendar-alt"></i>{{$notice->created_at}}</span>
                    </div>
                    <div class="notice-title">
                        <a href="notices/{{$notice->id}}">{{$notice->title}}</a>
                    </div>
                    <div class="notice-desc">
                        {{$notice->description}}
                    </div>
                </div>

        @endforeach
            <div class="board-paging">
                {!! $notices->links() !!}
            </div>
        </div>
    </div>
@endsection
