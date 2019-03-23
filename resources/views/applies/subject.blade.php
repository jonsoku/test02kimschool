@extends('layouts.index')
@section('wrapper-title')
    <h2># applies</h2>
@endsection
@section('wrapper')


    <style>
        .apply-subject{
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-auto-rows: 100px;
        }

        .checks{
            align-items: center;
            justify-content: center;
        }
    </style>
        <div class="">
            <form action="{{route('applySubjects.store')}}" method="POST" class="apply-subject">
                @csrf
                <div class="checks">
                    <input type="checkbox" name="java1" value="자바기초">
                    <label for="jav1"><span>기초</span></label>
                </div>

                <div class="checks">
                    <input type="checkbox" name="java2" value="자바중급">
                    <label for="java2"><span>중급</span></label>
                </div>


                <div class="checks">
                    <input type="checkbox" name="java3" value="자바고급">
                    <label for="java3"><span>고급</span></label>
                </div>


                <div class="checks">
                    <input type="checkbox" name="web1" value="웹기초">
                    <label for="web1"><span>기초</span></label>

                </div>
                <div class="checks">
                    <input  type="checkbox" name="web2" value="블로그만들기">
                    <label for="web2"><span>중급</span></label>

                </div>
                <div class="checks">
                    <input  type="checkbox" name="web3" value="홈페이지만들기">
                    <label for="web3"><span>고급</span></label>

                </div>

                <div class="apply-info apply-info-submit">
                    <button type="submit">다음페이지로</button>
                </div>

            </form>
        </div>
@endsection
