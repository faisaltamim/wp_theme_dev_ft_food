<div class="MyCommentSection">
	<?php 

		if(!comments_open()){
			echo "Comment Section Closed!";
		}else{
				comment_form();
				if(get_comments_number() == 1){
					echo get_comments_number()." Comment.";
					echo "<hr>";
					echo wp_list_comments();
				}elseif(get_comments_number() == 0){
					echo get_comments_number()." Comment.";
				}
				else{
					echo get_comments_number()." Comments.";
					echo "<hr>";
					echo wp_list_comments();
				}
		}
		



	?>
</div>
