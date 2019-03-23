@extends('layouts.index')
@section('wrapper')
    <div class="subject-lists">
        <ul>
            <li class="subject-list-java"><a href="java">JAVA</a></li>
            <li class="subject-list-php"><a href="php">PHP</a></li>
            <li class="subject-list-web slweb"><a href="web">WEB</a></li>
            <li class="subject-list-japanese"><a href="japanese">JAPANESE</a></li>
        </ul>
    </div>
    <div class="subjects-slide">
        <div class="subjects-slide-titles">
            <div class="subjects-slide-title">WEB기초반</div>
            <div class="subjects-slide-title">블로그반</div>
            <div class="subjects-slide-title">홈페이지반</div>
        </div>
        <div class="subjects-slide-descriptions">
            <div class="subjects-slide-description">
                <h2 class="description-tit">
                    WEB 기초반
                </h2>
                <p class="description-date">
                    일요일 (09:00 ~ 10:30)
                </p>
                <ul class="description-detail">
                    <li><span>EC사이트관리자, 웹디자이너 및 자바개발자들에게 추천합니다.</span></li>
                    <li><span>HTML, CSS, JAVASCRIPT까지 기초를 알기 쉽게 설명합니다.</span></li>
                </ul>
            </div>
            <div class="subjects-slide-description">
                <h2 class="description-tit">
                    블로그 똑같이 따라하기 (HTML/CSS)
                </h2>
                <p class="description-date">
                    일요일 (09:00 ~ 10:30)
                </p>
                <ul class="description-detail">
                    <li><span>HTML, CSS를 이용해 자신만의 블로그를 만들어봅니다 !</span></li>
                    <li><span>간단한 블로그를 만들어보고 싶으신분이라면 강의 신청해주세요.</span></li>
                </ul>
            </div>
            <div class="subjects-slide-description">
                <h2 class="description-tit">
                    홈페이지 똑같이 따라하기 (HTML/CSS)
                </h2>
                <p class="description-date">
                    일요일 (15:00 ~ 16:30)
                </p>
                <ul class="description-detail">
                    <li><span>HTML, CSS를 이용해 자신만의 블로그를 만들어봅니다 !</span></li>
                    <li><span>간단한 블로그를 만들어보고 싶으신분이라면 강의 신청해주세요.</span></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
