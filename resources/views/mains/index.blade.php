@extends('layouts.index')
@section('wrapper')
    <div class="top-container-slider">
        <ul>
            <li>
                <section class="top-container">
                    <div class="showcase">
                        <h1>타카다노바바 사무실 이전</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A beatae dolor libero maxime minima quae quaerat, quam ratione sit vitae.</p>
                        <a href="" class="btn">Read More</a>
                    </div>
                </section>
            </li>
            <li>
                <section class="top-container">
                    <div class="showcase">
                        <h1>자바 취업반 85% 취업!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A beatae dolor libero maxime minima quae quaerat, quam ratione sit vitae.</p>
                        <a href="" class="btn">Read More</a>
                    </div>
                </section>
            </li>
            <li>
                <section class="top-container">
                    <div class="showcase">
                        <h1>HTML/CSS 블로그반 개설</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A beatae dolor libero maxime minima quae quaerat, quam ratione sit vitae.</p>
                        <a href="" class="btn">Read More</a>
                    </div>
                </section>
            </li>
            <li>
                <section class="top-container">
                    <div class="showcase">
                        <h1>Your Web Presence</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A beatae dolor libero maxime minima quae quaerat, quam ratione sit vitae.</p>
                        <a href="" class="btn">Read More</a>
                    </div>
                </section>
            </li>
            <div class="top-slider-dots">

            </div>
        </ul>
    </div>


    <section class="boxes">
        <div class="box" onclick="location.href='/applies'">
            <i class="fas fa-cat fa-3x" style="color:#00395d;"></i>
            <h3>수강신청</h3>
        </div>
        <div class="box" onclick="location.href='/subjects/java'">
            <i class="fas fa-cat fa-3x"></i>
            <h3>수강후기</h3>
        </div>
        <div class="box" onclick="location.href='/subjects/java'">
            <i class="far fa-question-circle fa-3x"></i>
            <h3>질문답변</h3>
        </div>
        <div class="box" onclick="window.open('http://youtube.com', '강의영상', 'width=1000, height=1000, toolbar=no, menubar=no, scrollbars=no, resizable=yes' );">
            <i class="fab fa-youtube fa-3x" style="color:red;"></i>
            <h3>강의영상</h3>
        </div>
    </section>

    <section class="info">
        <img src="https://images.unsplash.com/photo-1526498460520-4c246339dccb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2700&q=80" alt="">
        <div>
            <h2>web</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, deserunt dolor eaque laborum officia pariatur quidem totam ut. Aliquid animi atque delectus dignissimos ducimus laudantium recusandae sed suscipit ullam voluptates!</p>
            <a href="#" class="btn">Learn more</a>
        </div>
    </section>



@endsection
