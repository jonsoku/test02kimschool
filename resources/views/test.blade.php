<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        @font-face { font-family: 'GoyangDeogyang'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_one@1.0/GoyangDeogyang.woff') format('woff'); font-weight: normal; font-style: normal; }
        @import url(//fonts.googleapis.com/earlyaccess/hanna.css);
        :root{
            --grey: #52565e;
            --dark : #333;
            --light: #f3f4f7;
            --shadow:0 1px 5px rgba(104, 104, 104, 0.8);
            --shadowHover:3px 5px 10px rgba(104, 104, 104, 0.8);
        }

        #header{
            position: fixed;
            z-index: 999;
            width:100%;
        }
        #slide{}
        #content{}
        #footer{}

        .container{
            width: 1100px;
            margin: 0 auto;
        }
        #header>.container{
            position: relative;
        }
        .header{
        }

        .header ul{
            overflow: hidden;
            text-align: center;
        }
        .header ul li{
            float:left;
            width:12.5%;
            padding: 1rem;
        }
        .header ul li a{
            transition: all 0.2s;
            color: var(--grey);
            font-family: 'GoyangDeogyang';
            display:block;
            margin: 2rem 0;
        }
        .header ul li a:hover{
            color:var(--light);
            transform: scale(1.1)
        }

        .slide{
            transition: all 0.7s;
        }

        .slide-item{
            position: relative;
        }

        .slide-item.slide1{
            background: url('https://images.unsplash.com/photo-1510519138101-570d1dca3d66?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2231&q=80');
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center;

        }

        .slide-item.slide2{
            background: url('https://images.unsplash.com/photo-1505238680356-667803448bb6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60');
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .slide-item.slide3{
            background: url('https://images.unsplash.com/photo-1515704089429-fd06e6668458?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60');
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .slide .slide-box{
            color: white;
        }
        .slide .slide-box.slide-box-basic{
            position: absolute;
            left:15%;
            top:25%;
            transform: translate(-50%,-50%);
        }
        .slide-box-basic h2{
            font-size: 2rem;
            margin-bottom:1rem;
            position: relative;
        }
        .slide-box-basic h2:after{
            content: '';
            position: absolute;
            left:0;
            bottom:-1rem;
            width:13.7rem;
            height: 2px;
            background-color: var(--light);
        }

        .slide-box-basic p{
            font-size: 1rem;
            text-align: right;
        }
        .slide .slide-box.slide-box-sub{
            position: absolute;
            right:5%;
            bottom:10%;
        }
        .slide-box-sub h2{
            font-size: 1.4rem;
            margin-bottom:1rem;
        }
        .slide-box-sub p{
            font-size: 0.5rem;
        }

        .slide-dots{
            position: absolute;
            left:50%;
            bottom:20%;
            transform: translate(-50%,-50%);
        }
        .dot{
            display: inline-block;
            width:40px;
            height: 5px;
            background-color: var(--light);
            margin: 10px;
            cursor: pointer;
        }
        .dot.dot-active{
            background-color: var(--dark);
            border: 1px solid var(--light);
        }

        .slide-arrows{

        }
        .slide-arrows .slide-arrow{
            font-size: 3rem;
            color:var(--light);
            display:inline-block;
            position: absolute;
            transform: translate(-50%,-50%);
            font-weight: 100;
            cursor: pointer;
            opacity: 0.3;
            transition: all 0.4s;
        }
        .slide-arrows .slide-arrow.slide-arrow-left{
            left:5%;
            bottom:50%;
        }
        .slide-arrows .slide-arrow.slide-arrow-right{
            right:5%;
            bottom:50%;
        }
        .slide-arrows .slide-arrow:hover{
            opacity: 0.5;
        }

        .content{}
        .footer{}

        .cbox{}
        .cbox.cbox1{}
        .cbox.cbox2{}
        .cbox.cbox3{}
        .cbox.cbox4{}

    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <div class="header">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">HISTORY</a></li>
                        <li><a href="#">PORTFOLIO</a></li>
                        <li><a href="#">WORKS</a></li>
                        <li><a href="#">PRESS</a></li>
                        <li><a href="#">PARTNERS</a></li>
                        <li><a href="#">기부금 모금액</a></li>
                        <li><a href="#">활용 실적</a></li>
                    </ul>
                </div>
            </div>
        </div><!--header end-->
        <div id="slide">
            <div class="slide">
                <div class="slide-item slide1">
                    <div class="slide-box slide-box-basic">
                        <h2>멋쟁이 사자처럼</h2>
                        <p>HACK YOUR LIFE</p>
                    </div>
                    <div class="slide-box slide-box-sub">
                        <h2>내 아이디어를 내 손으로 실현한다</h2>
                        <p>컴퓨터를 모르는 학생들이 프로그래밍 교육을 통해 원하는 IT서비스를 직접 런칭합니다.</p>
                    </div>
                </div>
                <div class="slide-item slide2">
                    <div class="slide-box slide-box-basic">
                        <h2>멋쟁이 사자처럼</h2>
                        <p>HACK YOUR LIFE</p>
                    </div>
                    <div class="slide-box slide-box-sub">
                        <h2>내 아이디어를 내 손으로 실현한다</h2>
                        <p>컴퓨터를 모르는 학생들이 프로그래밍 교육을 통해 원하는 IT서비스를 직접 런칭합니다.</p>
                    </div>
                </div>
                <div class="slide-item slide3">
                    <div class="slide-box slide-box-basic">
                        <h2>멋쟁이 사자처럼</h2>
                        <p>HACK YOUR LIFE</p>
                    </div>
                    <div class="slide-box slide-box-sub">
                        <h2>내 아이디어를 내 손으로 실현한다</h2>
                        <p>컴퓨터를 모르는 학생들이 프로그래밍 교육을 통해 원하는 IT서비스를 직접 런칭합니다.</p>
                    </div>
                </div>
                <div class="slide-dots">

                </div>
                <div class="slide-arrows">
                    <div class="slide-arrow slide-arrow-left">
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="slide-arrow slide-arrow-right">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>

        </div>

        <div id="content">
            <div class="container">
                <div class="content">
                    <div class="cbox cbox1">

                    </div><!--cbox1 end-->
                    <div class="cbox cbox2">

                    </div><!--cbox2 end-->
                    <div class="cbox cbox3">

                    </div><!--cbox3 end-->
                    <div class="cbox cbox4">

                    </div><!--cbox4 end-->
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <div class="footer">

                </div>
            </div>
        </div>
    </div>
    <script>
        const slide = document.querySelector('.slide');
        const slideItem = document.querySelectorAll('.slide-item');
        const slideBox = document.querySelector('#slide');
        const length = document.querySelectorAll('.slide-item').length;
        let page = 0;
        const width = 100;
        const height = 80;
        const dots = document.querySelector('.slide-dots');
        const leftArrow = document.querySelector('.slide-arrow-left');
        const rightArrow = document.querySelector('.slide-arrow-right');

        for(let i = 0 ; i < length; i++){
            const dot = document.createElement('div');
            dots.appendChild(dot);
            dot.classList.add('dot');
        }

        const dot = document.querySelectorAll('.dot');

        slideBox.style.width = width + "vw";
        slideBox.style.height = height + "vh";
        slideBox.style.overflow = "hidden";

        slide.style.width = width * length + "vw";


        for(let i = 0 ; i < length ; i++){
            slideItem[i].style.width = width + "vw";
            slideItem[i].style.height = height + "vh";
            slideItem[i].style.float = 'left';
        }



        for(let i = 0 ; i < length; i++){
            dot[i].addEventListener("click", function(){
                moveTo(i);
                page = i;
            })
        }

        leftArrow.addEventListener("click", function(){
            if(page < 1){
                page = length;
            }
            leftSlide();
        })

        rightArrow.addEventListener("click", function(){
            if(page === length ){
                page = 0;
            }
            rightSlide();
        })

        function leftSlide(){
            moveTo(page-1);
            page--;
        }
        function rightSlide(){
            moveTo(page+1);
            page++;
        }

        function moveTo(index){
            index = index || 0;
            index = index % length;

            slide.style.marginLeft = (-width * index) + "vw";

            for(let i = 0 ; i < length ; i++){
                for(let j = 0; j < length ; j++){
                    if(dot[j].classList.contains('dot-active')){
                        dot[j].classList.remove('dot-active');
                    }
                }
                dot[index].classList.add('dot-active');
            }
            console.log(page);
        };

        function init(){
            moveTo(0);
            setInterval(function(){
                moveTo(page+1);
                page++;
                if(page === length){
                    page = 0;
                }
            }, 1000*3)
        };
        init();
    </script>
</body>
</html>
