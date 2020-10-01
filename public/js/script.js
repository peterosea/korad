////// 제이쿼리
$(document).ready(function(){

    /////////// 마블 보드게임
    const num_of_yRand = [360, 270, 540];
    const top_of_ratio = [0, 0, 0, 0, 0, 0, 25, 50, 75, 75, 75, 75, 50, 25];
    const left_of_ratio = [0, 16.67, 33.34, 50, 66.67, 83.34, 83.34, 83.34, 83.34, 50, 33.34, 16.67, 0, 0];
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
        $("#td" + sum_of_die).prepend('<a href="#detailbox" data-toggle="modal" class="popup"></a>');

        var popupInterval = setTimeout(function () {
            $('#detailbox').modal('show');
        }, 500);
    }
    function get_board_html(num) {
        $.ajax({
            url: "/marble/board/" + num,
            type: "GET",
            success: function( response ) {
                $("#detailbox .modal-body").html(response);
            }

        });
    }
    $(function() {
        $(document).on("click", ".selected", function(e){
            var num = $(this).attr('id');
            num  = num.replace("td", "");

            get_board_html(num);
            $('#detailbox').modal('show');

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
});