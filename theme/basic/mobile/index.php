<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<style>
    #slide{width:400px;height:auto;overflow:hidden;margin:0 auto;}
    .slidelist{width:300%;height:100%;position:relative;}
    .slideIimg{float:left;}
    .slideIimg>img{display:block;width:400px;height:auto;}

    .mindex{width:100%;height:156px;margin-top:30px;}
    .mindex>figure{width:50%;height:100%;float:left;overflow:hidden;
        margin-block-start:0;
        margin-block-end:0;
        margin-inline-start:0;
        margin-inline-end:0;
    }
    .mindex>figure>a>img{width:100%;height:100%;}
    .mindex>figure{position:relative;text-align:center;}
    .mindex>figure>a>figcaption{width:80%;height:auto;position:absolute;top:25%;left:50%;transform: translate(-50%,-50%);color:#fff;
        letter-spacing:-1px;word-spacing:-1px;font-size:1.2em;text-shadow: 2px 2px 4px #000;background:rgba(0,0,0,0.2)}

    .mindex2{width:100%;height:80px;background:yellowgreen;overflow:hidden;text-align:center;}
    .mindex2>a{width:90%;}
    .n{color:#13AD67;font-weight:bolder;font-size:1.8em;line-height:80px;}
    .nlink{color:#fff;word-spacing:-1px;letter-spacing:-1px;font-size:1.4em;line-height:60px;}

    .mindex-qa{width:100%;height:auto;position:relative;}
    .mindex-qa>img{width:100%;height:auto;}
</style>

<script>
    $(function(){
        var current=0;
        setInterval(function(){
            if(current<2){
                current++;
            }else{
                current=0;
            }
            var position= current * (-400) + "px";
            $(".slidelist").animate({left:position})
        },4000)
    })
</script>   

<section id=slide>
        <div class="slidelist">
            <div class="slideIimg">
                <img src="<?php echo G5_URL ?>/images/slide1.jpg" alt="삶은 굼벵이">
            </div>
            <div class="slideIimg">
                <img src="<?php echo G5_URL ?>/images/slide2.jpg" alt="청년농부">
            </div>
            <div class="slideIimg">
                <img src="<?php echo G5_URL ?>/images/slide3.jpg" alt="건조굼벵이">
            </div>
        </div>
</section>

<section class="mindex">
    <figure><a href="http://goommorning.co.kr/bbs/board.php?bo_table=product&wr_id=4">
    <img src="<?php echo G5_URL ?>/images/mindex1.jpg" alt="포장제품">
        <figcaption>식용 굼벵이 제품 더보기 +</figcaption></a>
    </figure>
    <figure><a href="http://goommorning.co.kr/bbs/board.php?bo_table=product&wr_id=2">
        <img src="<?php echo G5_URL ?>/images/mindex2.jpg" alt="코쿤">
        <figcaption>코쿤/유충/성충 더보기 +</figcaption></a>
    </figure>
</section>
<section class="mindex2">
        <a href="https://shopping.naver.com/"><span class="n">N</span>&nbsp;&nbsp;<span class="nlink">식용 굼벵이 구매 네이버 쇼핑 바로가기 Click →</span></a>
</section>

<section class="mindex-qa">
    <img src="<?php echo G5_URL ?>/images/mqa1.jpg" alt="녹색바탕">
    <img src="<?php echo G5_URL ?>/images/mqa2.jpg" alt="녹색바탕">
</section>

<!-- 메인화면 최신글 시작 -->
<?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	echo latest('theme/basic', 'qaqa', 3, 23);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('theme/basic', 'notice', 3, 23);		// 최소설치시 자동생성되는 공지사항게시판
 ?>
<!-- 메인화면 최신글 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>