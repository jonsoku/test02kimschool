@extends('layouts.index')
@section('wrapper-title')
    <h2># about-kimschool</h2>
@endsection
@section('wrapper')
    <style>
        .about{
            width:100%;
            background-color: var(--light);
            display:grid;
            grid-gap: 5px;

        }

        .abox{
        }
        .abox1{
        }
        .abox1 .teacher_interview{
            border:0; width:100%; height: 30vh;
        }
        .abox2{
        }
        .abox2 .about-kimschool{
            width:100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            text-align: center;
        }
        .abox2 .about-kimschool h1{
            background-color: #4196DE;
            color:var(--light);
        }
    </style>
    <div class="about kimschool">
        <div class="abox abox1">
            <iframe
                class="teacher_interview"
                src="https://www.youtube.com/embed/giouzUH5rOc">
            </iframe>
        </div>
        <div class="abox abox2">
            <ul>
                <li class="about-kimschool mt-40">
                    <div><h1>특징</h1> </div>
                    <img src="{{URL::asset('images/about_kimschool/about1.png')}}" alt=""></li>
                <li class="about-kimschool">
                    <img src="{{URL::asset('images/about_kimschool/about2.png')}}" alt=""></li>
                <li class="about-kimschool">
                    <img src="{{URL::asset('images/about_kimschool/about3.png')}}" alt=""></li>
                <li class="about-kimschool">
                    <img src="{{URL::asset('images/about_kimschool/about4.png')}}" alt=""></li>
                <li class="about-kimschool">
                    <img src="{{URL::asset('images/about_kimschool/about5.png')}}" alt=""></li>
                <li class="about-kimschool mt-70">
                    <div><h1>연계회사</h1> </div>
                    <img src="{{URL::asset('images/about_kimschool/about6.png')}}" alt=""></li>
                <li class="about-kimschool mt-70">
                    <div><h1>취업현황</h1> </div>
                    <img src="{{URL::asset('images/about_kimschool/about7.png')}}" alt=""></li>
            </ul>
            <input class="mb-100" type="button" value="뒤로가기" onclick="history.back(-1);">
        </div>
    </div>
@endsection
