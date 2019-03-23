@extends('layouts.index')
@section('wrapper-title')
    <h2># about-teacher</h2>
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
            margin-bottom: 3rem;
            background-color: var(--dark);
            color:var(--light);
            display:inline-block;
            padding: 1rem 3rem;
            border-radius: 1rem;
        }

        .abox2 ul{
            text-align: center;
        }
        .abox2 ul>li{
        }
        .abox2 ul li h2{
            margin-bottom:20px;
        }
        .teacher table{
            text-align: center;
            width:100%;
            border:1px solid var(--dark);
            border-spacing:0;

        }
        .teacher table thead{
            font-weight: 900;
            color:#fff;
            background-color: var(--dark);
        }
        .teacher table tr{
            height: 3vh;
            transition: all 0.3s;
        }
        .teacher table tr:hover{
            background-color: var(--dark);
            color: var(--light);
        }
        .teacher table th{
        }
    </style>
    <div class="about teacher">
        <div class="abox abox1">
            <iframe
                class="teacher_interview"
                src="https://www.youtube.com/embed/giouzUH5rOc">
            </iframe>
        </div>
        <div class="abox abox2">
            <ul>
                <li class="mt-50">
                    <h2>강사 소개</h2>
                    <p>김정화</p>
                    <span></span>
                </li>
                <li class="mt-50">
                    <h2>생년월일</h2>
                    <p>1985년 7월생 </p>
                    <span></span>
                </li>
                <li class="mt-50">
                    <h2>경력</h2>
                    <ul>
                        <li>2004年～2010年：인하대학교 졸업</li>
                        <li>2006年～2011年：인하과외 커뮤니티 대표강사</li>
                        <li>2013年〜現在： 일본 도쿄 프리랜서</li>
                    </ul>
                    <span></span>
                </li>
                <li class="mt-50">
                    <h2>지도 가능 언어 및 기술</h2>
                    <table>
                        <thead>
                            <td>분야</td>
                            <td>내용</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MAIN</td>
                                <td>JAVA7, JAVA8, VBA, ColdFusion</td>
                            </tr>
                            <tr>
                                <td>VIEW</td>
                                <td>JSP, HTML, CSS, JavaScript, jQuery</td>
                            </tr>
                            <tr>
                                <td>DB</td>
                                <td>Oracle(PLSQL), MySQL, MariaDB</td>
                            </tr>
                            <tr>
                                <td>FRAMEWORK</td>
                                <td>Spring, Struts1, Struts2, Seasar2</td>
                            </tr>
                            <tr>
                                <td>OS</td>
                                <td>Windows, Unix, Linux</td>
                            </tr>
                            <tr>
                                <td>TOOL</td>
                                <td>A5M2, CSE, TeraTerm, Maven, Ant</td>
                            </tr>
                        </tbody>
                    </table>
                    <span></span>
                </li>
                <li>
                    <h2></h2>
                    <p></p>
                    <span></span>
                </li>
            </ul>
            <input class="mb-100" type="button" value="뒤로가기" onclick="history.back(-1);">
        </div>
    </div>
@endsection
