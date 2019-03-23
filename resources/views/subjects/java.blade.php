@extends('layouts.index')
@section('wrapper')
    <div class="subject-lists">
        <ul>
            <li class="subject-list-java sljava"><a href="java">JAVA</a></li>
            <li class="subject-list-php"><a href="php">PHP</a></li>
            <li class="subject-list-web"><a href="web">WEB</a></li>
            <li class="subject-list-japanese"><a href="japanese">JAPANESE</a></li>
        </ul>
    </div>
    <div class="subjects-slide">
        <div class="subjects-slide-titles">
            <div class="subjects-slide-title">기초반</div>
            <div class="subjects-slide-title">중급반</div>
            <div class="subjects-slide-title">고급반</div>
            <div class="subjects-slide-title">취업반</div>
        </div>
        <div class="subjects-slide-descriptions">
            <div class="subjects-slide-description">
                <h2 class="description-tit">
                    JAVA 기초반
                </h2>
                <p class="description-date">
                    일요일 (09:00 ~ 10:30)
                </p>
                <ul class="description-detail">
                    <li><span>현업에서 사용하는 자바를 실무위주 기초부터 단단하게!</span></li>
                    <li><span>IT로 이직, 취업을 생각하시는 분들에게 추천합니다.</span></li>
                </ul>
            </div>
            <div class="subjects-slide-description">
                <h2 class="description-tit">
                    JAVA 중급반
                </h2>
                <p class="description-date">
                    일요일 (09:00 ~ 10:30)
                </p>
                <ul class="description-detail">
                    <li><span>Servlet을 사용하여 DB, JAVA, HTML&JSP를 연동하여 게시판을 만들어 봅니다.</span></li>
                    <li><span>JAVA기초 수강자, 현직 1-2년차 프로그래머에게 추천합니다.</span></li>
                    <li><span>일본 현업에서 사용되는 툴을 사용하여, 업무속도 향상도 가능합니다.</span></li>
                </ul>
            </div>
            <div class="subjects-slide-description">
                <h2 class="description-tit">
                    JAVA 고급반(시범운영)
                </h2>
                <p class="description-date">
                    일요일 (15:00 ~ 16:30)
                </p>
                <ul class="description-detail">
                    <li><span>SpringBoot와 STS를 사용하여 게시판을 만들어 봅니다.</span></li>
                    <li><span>JAVA중급 수강자, 현직 1-2년 이상만 신청가능합니다.</span></li>
                    <li><span>2회이상 결석,지각시 수강 중지됩니다.</span></li>
                    <li><span>기본적 HTML, JSP, JAVA, 기본적인 DB조작(CRUD)이 가능하신 분들을 대상으로 진행하는 수업입니다.</span></li>
                </ul>
            </div>
            <div class="subjects-slide-description">
                <h2 class="description-tit">
                    JAVA 고급반(시범운영)
                </h2>
                <p class="description-date">
                    토/일 (17:00 ~ 18:30)
                </p>
                <ul class="description-detail">
                    <li><span>자바, HTML&JSP, ORACLE등 업무에 필요한 기본 스킬을 빠르게 습득합니다.</span></li>
                    <li><span>면접연습, 업무에 필요한 일본어 수업(한국어, 일본어 네이티브 선생님이 직접지도합니다)</span></li>
                    <li><span>자바, HTML&JSP, ORACLE등 업무에 필요한 기본 스킬을 빠르게 습득합니다.</span></li>
                    <li><span>취업연계도 지원해드리고 있습니다.(※평균급여 25만엔 + @ 교통비 수준)</span></li>
                    <li><span>※평균급여? 일본어N2이상, 비자발급에 문제가 없는 경우, 일본나이로 28세 이하기준</span></li>
                </ul>

            </div>
        </div>
    </div>
@endsection
