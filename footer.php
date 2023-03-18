    <footer>
        <p>Copyright <small>&copy;</small>Shinohara All RIGHT RESERVED.</p>
    </footer>
		<?php wp_footer(); ?>
		<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> -->
	
	
	<script>
  var now_post_num = 6; // 現在表示されている数
  var get_post_num = 6; // 一度に取得する数
  $(function() {
    $(document).on('click', '.mbtn', function() {
			// console.log(".mbtn");
      var ajax_url = '<?php echo get_template_directory_uri();?>/readmore.php';
			console.log(ajax_url);
 
      $.ajax({
        type: 'post',
        url: ajax_url,
        data: {
            'now_post_num': now_post_num,
            'get_post_num': get_post_num,
        },
        dataType: 'html',
      })
      .done(function(data){
				console.log(data);
        now_post_num = now_post_num + get_post_num;
        $("#more_disp").remove();
        $("#content").append(data);
      })
      .fail(function(){ // ajax通信成失敗の処理
        alert('エラーが発生しました');
      })
      return false;
    });
  });
  </script>
		<!-- jsもcssと同様wp-contentの直下にいないといけない -->
		<script src="./wp-content/themes/razonaojt/script.js"></script>

	
</body>

</html>