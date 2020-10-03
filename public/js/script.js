////// 제이쿼리
$(document).ready(function(){

    // 현재 메뉴 표시
    const getNav = document.querySelectorAll('.main_nav li.item');
    const getNavA = document.querySelectorAll('.main_nav li.item a');

    for (let i = 0; i < getNav.length; i++) {
        getNavA[i].addEventListener('click', function(e){
            e.preventDefault;
            for (let j = 0; j < getNav.length; j++) {
                getNav[j].classList.remove('active');
            }
            getNav[i].classList.add('active');
        });
    }

    // 스크롤 Fix 헤더
    window.addEventListener('scroll', function(e) {
        let Yposition = document.querySelector('html').scrollTop;
        const getHeader = document.getElementById('header');
        if (Yposition > 50) {
            getHeader.classList.add('fixed');
        } else {
            getHeader.classList.remove('fixed');
        }
    });

    ////////// 방폐장 맵/타임라인 스크립트
    const getPoint = document.querySelectorAll('.map_wrap ._inner .point'); //타임라인 내 포인트
    const getMapPoint = document.querySelectorAll('._map ._map_point'); //지도 내 포인트
    
    // 비디오 PHP Load
    function get_video_html(index) {
        $.ajax({
            url: "/mapvideo/_video" + index + ".php",
            type: "GET",
            success: function( response ) {
                $("#mapvideo_pop .modal-body").html(response);
            }
        });
    }

    // Add Active Function
    function goTimeLine(index) {
        const getTL = document.querySelector('._timeline ._active');
        const getMapLine = document.querySelectorAll('._map ._line');
        const getMapName = document.querySelectorAll('._map .nametag');
        

        const k = 0;
        const l = 1;
        const m = 2;

        if( index == 0 ) { //첫번째일 땐 첫번째 외 나머지 모든 아이템 클래스 삭제
            getTL.style.width = '174px';
            getPoint[l].classList.remove('active');
            getPoint[m].classList.remove('active');
            getMapPoint[l].classList.remove('active');
            getMapPoint[m].classList.remove('active');
            getMapLine[l].classList.remove('active');
            getMapLine[m].classList.remove('active');
            getMapName[l].classList.remove('active');
            getMapName[m].classList.remove('active');
        } else if ( index == 1 ) { //두번째일 땐 첫번째와 세번째 아이템 클래스 삭제
            getTL.style.width = '605px';
            getPoint[m].classList.remove('active');
            getMapPoint[m].classList.remove('active');
            getMapLine[l].classList.remove('active');
            getMapLine[m].classList.remove('active');
            getMapName[m].classList.remove('active');

            getPoint[k].classList.add('active');
            getMapLine[k].classList.add('active');
            getMapName[k].classList.add('active');

        } else if ( index == 2 ) { //세번째일 땐 모든 아이템 클래스 추가
            getTL.style.width = '1035px';

            getPoint[k].classList.add('active');
            getPoint[l].classList.add('active');
            getMapLine[k].classList.add('active');
            getMapLine[l].classList.add('active');
            getMapName[k].classList.add('active');
            getMapName[l].classList.add('active');
        }
        getPoint[index].classList.add('active');
        getMapPoint[index].classList.add('active');
        getMapName[index].classList.add('active');

        get_video_html(index);
        $('#mapvideo_pop').modal('show');
        
    }
    
    for( let j = 0; j < 3; j++ ) {
        getPoint[j].addEventListener('click', function(){
            goTimeLine(j);
        }); //타임라인 포인트 활성화
        getMapPoint[j].addEventListener('click', function(){
            goTimeLine(j)
        }); //지도 내 포인트 활성화
    }
    ////.End 방폐장 맵/타임라인 스크립트

    /////////// 마블 보드게임
    const top_of_ratio = [0, 0, 0, 0, 0, 0, 25, 50, 75, 75, 75, 75, 50, 25]; // 말의 X좌표
    const left_of_ratio = [0, 16.67, 33.34, 50, 66.67, 83.34, 83.34, 83.34, 83.34, 50, 33.34, 16.67, 0, 0]; // 말의 Y좌표
    var sum_of_die = 0;

    function play_marble(yRand) {
        setTimeout(move_pieces, 2000, yRand);
    }
    function move_pieces(yRand) {

        var minus_val = yRand<360 ? -1 : -3;
        var num_of_die = (yRand / 90) + (minus_val);
        sum_of_die += num_of_die;
        // 14는 골인임
        if( sum_of_die>13 ) {
            $(".marker").css("top", "-10px");
            $(".marker").css("left", "20px");
            $("#td1" + sum_of_die).addClass("selected");
            $("#td14").prepend('<a href="#finishbox" data-toggle="modal" class="popup"></a>');

            var popupInterval = setTimeout(function () {
                $('#finishbox').modal('show');
            }, 500);
            return false;
        }

        var marker = document.getElementById('marker');
        marker.style.transition = 'all 2s';

        $(".marker").css("top", "calc(" + top_of_ratio[sum_of_die] + "% + -10px)");
        $(".marker").css("left", "calc(" + left_of_ratio[sum_of_die] + "% + 20px)");

        $("#td" + sum_of_die).addClass("selected");
        get_board_html(sum_of_die);
        $("#td" + sum_of_die).prepend('<a href="#marble_pop" data-toggle="modal" class="popup"></a>');

        var popupInterval = setTimeout(function () {
            $('#marble_pop').modal('show');
        }, 500);
    }
    function get_board_html(num) {
        $.ajax({
            url: "/marble/_step" + num + ".php",
            type: "GET",
            success: function( response ) {
                $("#marble_pop .modal-body").html(response);
            }
        });
    }
    $(function() {
        $(document).on("click", ".selected", function(e){
            var num = $(this).attr('id');
            num  = num.replace("td", "");

            get_board_html(num);
            $('#marble_pop').modal('show');

            e.preventDefault();
        });
        $('#finishbox').on('hidden.bs.modal', function () {
            location.href="/marble";
        });
    });

    //////// 주사위 굴리기
    var dice = document.getElementById('the_dice');
    var imgDice = document.querySelector('.btn_dice_wrap');
    var btn_dice = document.getElementById('btn_dice');
    var cube = document.getElementById('cube');
    var box_shadow = document.querySelector('.box_shadow');

    //랜덤 숫자 범위
    var min = 3;
    var max = 7;
    var transX = 350;

    // 주사위 굴리기 버튼 클릭
    btn_dice.addEventListener('click', function(e){
        e.preventDefault();
        getStart();
        rollDice();
    }, false);
    // 입체 주사위 다시 클릭했을 때
    cube.addEventListener('click', function(e){
        e.preventDefault();
        if(sum_of_die > 13) {
            this.removeEventListener('click',arguments.callee);
            this.classList.add('finish');
        }
        getStart();
        rollDice();
    }, false);

    //주사위 위치 리셋
    function getStart(){
        // 입체주사위 그룹
        dice.style.opacity = '0';
        dice.style.visibility = 'hidden';
        // 그림자
        box_shadow.style.transition = 'unset';
        box_shadow.style.transform = 'translateX(0)';
        // 입체주사위
        cube.style.transition = 'unset';
        cube.style.transform = 'translateX(0px) rotateY(0deg)';
    }

    // 입체 주사위 값 계산
    function rollDice(){
        box_shadow.style.animation = 'none';
        box_shadow.offsetHeight;
        box_shadow.style.animation = null;

        imgDice.style.opacity = '0';
        imgDice.style.top = '-200px';
        
        // 주사위 이동
        var myInterval = setInterval(function (){
            var yRand = getRandom(max, min);
            imgDice.style.display = 'none';
            dice.style.opacity = '1';
            dice.style.visibility = 'visible';
            cube.style.transition = 'all 2s';
            box_shadow.style.transition = 'all 2s';
            box_shadow.style.transform = 'translateX(' + transX + 'px)';
            cube.style.transform = 'translateX(' + transX + 'px) rotateY(' + yRand + 'deg)';
            play_marble(yRand);
            clearInterval(myInterval);
            return;
        }, 500);
    }

    //랜덤숫자 구하기
    function getRandom(max, min) {
    return (Math.floor(Math.random() * (max-min)) + min) * 90;
    }
    /////.End 마블 보드게임

    ///// 유튜브 슬라이더
    $('#yeskorad_list').slick({
        centerMode: true,
        centerPadding: '600px',
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 7000,
        asNavFor: '#yeskorad_nav',
        infinite: true,
        arrows: false,
        responsive: [
            {
            breakpoint: 2000,
            settings: {
                centerPadding: '400px',
            }
            },
            {
            breakpoint: 1600,
            settings: {
                centerPadding: '200px',
            }
            },
            {
            breakpoint: 1200,
            settings: {
                centerPadding: '100px',
            }
            },
            {
            breakpoint: 900,
            settings: {
                centerMode: false,
            }
            }
        ]
    });
    ///// 유튜브 슬라이더 제목표시 영역
    $('#yeskorad_nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        centerPadding: '400px',
        asNavFor: '#yeskorad_list',
        autoplay: true,
        autoplaySpeed: 7000,
        centerMode: true,
        focusOnSelect: true,
        arrows: true,
    });
    /////.End 유튜브 슬라이더
        
});