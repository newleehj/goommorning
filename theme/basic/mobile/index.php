<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<img src="<?php echo G5_URL ?>/images/mindex.png" alt="모바일용 상단 소개 배너">

<!-- 메인화면 최신글 시작 -->
<?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/basic', 'free', 3, 23);		// 최소설치시 자동생성되는 자유게시판
	echo latest('theme/basic', 'qaqa', 3, 23);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('theme/basic', 'notice', 3, 23);		// 최소설치시 자동생성되는 공지사항게시판
 ?>
<!-- 메인화면 최신글 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>