<?php
	include_once("bootstrap_cdn.php");
?>

<!-- POSTS -->

<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

			<div class="panel panel-default">
				<!-- TITLE -->
		  		<div class="panel-heading">
		    		<h3 class="panel-title">
		    			<a href=<?php echo "view_post.php?id="; echo $id; ?> ><?php echo $title; ?></a>
		    		</h3>
		  		</div>

		  		<!-- 	CONTENT -->
		  		<div class="panel-body">
						<?php
							/*
		    			if($short_post==1) {
									echo truncate($desc , "view_post.php" , "id" , $id);
							} else {
								echo $desc;
							}*/
							echo $desc;
		    		?>
		  		</div>

		  		<!-- FOOTER-->
		  		<div class="panel-footer">
						<span class="col-sm-2">
				  			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				  			<a href=<?php echo "../users/profile.php?user="; echo $author; ?> >
										<?php echo $author?>
				  			</a>
					</span>

					<span class="col-sm-2">
							<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
			  			<a href=<?php echo "view_post.php?tags="; echo $tags; ?> >
									<?php echo $tags;?>
			  			</a>
					</span>
						<!-- views -->

						<span class="col-sm-3">

							<?php
								 if(isset($views)) {
									 echo "<span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>"." ".$views;
								 }
							?>
						</span>

						<!-- time -->
		  			<span class="label label-default">
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo $time ?>
						</span>


			  			<?php
			  				$delete_post_link='../posts/delete_post.php?post_id='.$id;
							if(isset($_SESSION['user_name']) ) {
								if($_SESSION['user_name']==$author || $_SESSION['user_type']=='admin') {
									echo "
									<span class='pull-right'>
									<a href='update_post.php?id=$id'  type=\"button\" class=\"btn btn-sm btn-default\">
										<i class=\"glyphicon glyphicon-edit\"></i>
									</a>

									<a href=$delete_post_link type=\"button\" class=\"btn btn-sm btn-default\">
										<i class=\"glyphicon glyphicon-remove\"></i>
									</a>
									</span>
									";
								}
							}
						?>

		  		</div>

			<!-- comments -->
			<?php
					if(isset($_REQUEST['id'])) {
							include("../posts/comments.php");
							if(isset($_SESSION['user_name']))
									include("../include/comment_form.php");
					}
			?>

			</div>
				<!-- end of panel -->
		</div>

		</div>
</div>
