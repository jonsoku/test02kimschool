@extends('layouts.index')
@section('wrapper')
    <div class="subject-lists">
        <ul>
            <li class="subject-list-java"><a href="java">JAVA</a></li>
            <li class="subject-list-php slphp"><a href="php">PHP</a></li>
            <li class="subject-list-web"><a href="web">WEB</a></li>
            <li class="subject-list-japanese"><a href="japanese">JAPANESE</a></li>
        </ul>
    </div>
    <div class="subjects-slide">
        <div class="subjects-slide-titles">
            <div class="subjects-slide-title">개설예정</div>
        </div>
        <div class="subjects-slide-descriptions">
            <div class="subjects-slide-description">
                <h2 class="description-tit">
                    KIMSCHOOL JAVA 커리큘럼
                </h2>
                <p class="description-date">description-date</p>
                <ul class="description-detail">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, autem blanditiis dicta dolorum facilis optio tempore ullam vitae voluptates.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, autem blanditiis dicta dolorum facilis optio tempore ullam vitae voluptates.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, autem blanditiis dicta dolorum facilis optio tempore ullam vitae voluptates.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
