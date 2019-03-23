@extends('layouts.index')
@section('wrapper-title')
    <h2># applies</h2>
@endsection
@section('wrapper')

    <style>

        

    </style>

    <div>
        <div class="apply">
            <form action="{{route('applies.store')}}" method="POST">
                @csrf
                <div class="apply-info apply-info-name">
                    <label for="name">성명</label>
                    <input type="text" name="name" placeholder="이름" value="{{ Auth::user()->name }}">
                </div>
                <div class="apply-info apply-info-age">
                    <label for="age">나이</label>
                    <input type="text" name="age" placeholder="나이를 입력해주세요.">
                </div>
                <div class="apply-info apply-info-sns">
                    <label for="sns">Kakao</label>
                    <input type="text" name="sns" placeholder="카카오톡 아이디를 입력해주세요.">
                </div>
                <div class="apply-info apply-info-gender">
                    <label for="gender">성별</label>
                    <select name="gender">
                        <option selected>선택해주세요.</option>
                        <option>여</option>
                        <option>남</option>
                    </select>
                </div>
                <div class="apply-info apply-info-level">
                    <label for="level">일어수준</label>
                    <select name="level">
                        <option selected>선택해주세요.</option>
                        <option>상</option>
                        <option>중</option>
                        <option>하</option>
                    </select>
                </div>
                <div class="apply-info apply-info-visa">
                    <label for="visa">비자종류</label>
                    <select name="visa">
                        <option selected>선택해주세요.</option>
                        <option>유학비자</option>
                        <option>워킹홀리데이</option>
                        <option>취업비자</option>
                        <option>고도인재비자</option>
                        <option>배우자비자</option>
                        <option>기타</option>
                    </select>
                </div>
                <div class="apply-info apply-info-it">
                    <label for="it">IT경력</label>
                    <select name="it">
                        <option selected>선택해주세요.</option>
                        <option>1년 미만</option>
                        <option>1년~2년</option>
                        <option>2년~3년</option>
                        <option>3년~4년</option>
                        <option>4년이상</option>
                    </select>
                </div>
                <div class="apply-info apply-info-submit">
                    <button type="submit">다음페이지로</button>
                </div>
            </form>
        </div>
    </div>
@endsection
