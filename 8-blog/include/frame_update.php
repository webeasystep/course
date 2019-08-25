<?php
	include("bootstrap_cdn.php");
?>

<head>
	  	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	  	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>

<div class="container">
	<div class="row">
	<div class="panel panel-default">
			    <div class="panel-heading">Update Post</div>
			    <div class="panel-body">

			     <!-- FORM STARTS HERE -->
			      <form role="form" method="POST" action=<?php echo "update_post.php?id=".$id ; ?>>
					  <div class="form-group">
					    <label class="control-label">Title</label>
					    <input type="" class="form-control" name="postTitle" value=<?php  echo $title; ?>>
					  </div>

					  <div class="form-group">
  						<label for="Description">Description : </label>
  						<textarea class="form-control" rows="8" id="content" name="post_desc">
  							<?php  echo $desc; ?>
  						</textarea>
  						<script type="text/javascript">
        					CKEDITOR.replace( 'content' );
      					</script>
					  </div>

					  <div class="form-group">
					    <label class="control-label">Tag</label>
					    <input type="text" class="form-control" name="post_tag" value=<?php  echo $tags; ?> >
					  </div>

				  	   <button type="submit" class="btn btn-default" name="submit">
				  	   	Update
				  	   </button>
				  </form>

				<!-- FORM ENDS HERE -->

			  </div>
	</div>
	</div>
</div>
