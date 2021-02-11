
CDN
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


Totop
<script>

	WPの時
		jQuery(function ($) {
			$(window).scrollとかclickとか(function(){
				ここに関数が入る;
			});//Totop
		});

	jQuery(function ($) {
		$(".toTopBtn").hide();
		$(window).scroll(function(){
			if($(this).scrollTop() > 1200){
				$(".toTopBtn").fadeIn();
			} else {
				$(".toTopBtn").fadeOut();//defaultは400
			}
		});//Totop
	});


	静的HTML
		$(function(){
			$(window).scrollとかclickとか(function(){
				ここに関数が入る;
			});//Totop
		});

	$(function(){
		$(".toTopBtn").hide();
		$(window).scroll(function(){
			if($(this).scrollTop() > 1200){
				$(".toTopBtn").fadeIn();
			} else {
				$(".toTopBtn").fadeOut();//defaultは400
			}
		});
	});

</script>


fadeinとバーガーメニュー
<script>
	$(function(){
		$(window).scroll(function(){
            $('.scroll').each(function(){
                var elemPos = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > elemPos - windowHeight + 200){
                    $(this).addClass('scrollin');
                }else{
                    $(this).removeClass('scrollin');
                }
            });
		});

		$(".humbMenu").click(function(){
			$(this).toggleClass("active");
			$(".glonav__menu").toggleClass("active");
		});
	});
</script>


クリップボードにコピー
<script src="https://cdn.jsdelivr.net/npm/clipboard@1/dist/clipboard.min.js"></script>
<script>
	var clipboard = new Clipboard('.copy_btn');
	    clipboard.on('success', function(e) {
	    jQuery(".copy_btn").addClass('copied');
	    jQuery(".copy_btn").html('<i class="fas fa-check"></i> <span>URLをコピーしました!</span>');
	    jQuery(".copy_text").slideDown('slow');
	});
	clipboard.on('error', function(e) {
	    jQuery(".copy_btn").addClass('copied not-copied');
	    jQuery(".copy_btn span").text('コピーできませんでした');
	    jQuery(".copy_text").slideDown('slow');
	});

	jQuery('#copy_textbox').on('click', function(e) {
	  e.target.setSelectionRange(0, e.target.value.length);
	});
</script>



コードに色を付ける
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script><!-- codeに色をつける　&ltと&gtではさむこと　class="prettyprint lang-css"必須 -->




タイプテキスト
<script src="js/typetext.js"></script>




