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
		    		<?php echo $row['postTitle']; ?>
		    		</h3>
		  		</div>

		  		<!-- 	CONTENT -->
		  		<div class="panel-body">
						<?php
							echo $row['postDesc'];
		    		?>
		  		</div>

		  		<!-- FOOTER-->
		  		<div class="panel-footer">
						<span class="col-sm-2">
				  			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>

										<?php echo $row['postAuthor']; ?>

					</span>

					<span class="col-sm-2">
							<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
									<?php echo $row['postTag'] ;?>
					</span>

			  		<?php
                $id=$row['postID'];
							if(isset($_SESSION['username']) ) {
								if($_SESSION['usertype']=='admin') {
									echo "
									<span class='pull-right'>
									<a href='../include/accept_requested_post.php?id=$id'  type=\"button\" class=\"btn btn-sm btn-success\">
		                  Accept
									</a>

									<a href='../include/delete_requested_post.php?id=$id' type=\"button\" class=\"btn btn-sm btn-danger\">
                    Discard
									</a>
									</span>
									";
								}
							}
						?>
          <br />
		  		</div>

			<!-- comments -->
			<?php
					if(isset($_REQUEST['id'])) {
							include("../posts/comments.php");
							if(isset($_SESSION['username']))
									include("../include/commentform.php");
					}
			?>

			</div>
				<!-- end of panel -->
		</div>

		</div>
</div>
