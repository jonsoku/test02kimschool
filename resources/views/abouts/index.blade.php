@extends('layouts.index')
@section('wrapper-title')
    <h2># about-index</h2>
@endsection
@section('wrapper')
<style>
    .about-index-boxes{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-auto-rows: 17vh;
        grid-gap: 1rem;
        align-content: center;
        justify-items: center;

    }
    .about-index-box{
        background-color: var(--dark);
        display:block;
        cursor: pointer;
        width:20vw;
    }
    .about-index-box span{
        color:var(--light);
        text-transform: uppercase;
    }
</style>
<div class="about-index-boxes">
        <div class="box about-index-box" onclick="location.href='{{route('abouts.kimschool')}}'"><span>kimschool</span></div>
        <div class="box about-index-box" onclick="location.href='{{route('abouts.teacher')}}'"><span>teacher</span></div>
</div>


@endsection
