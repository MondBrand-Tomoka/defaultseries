

Totop
<script>
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