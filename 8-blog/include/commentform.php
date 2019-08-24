<?php
    if(isset($_POST['submit'])) {

        session_start();
        include("../db/dbconnect.php");

        $id=$_REQUEST['id'];
        $desc=$_POST['commentDesc'];
        $author=$_SESSION['username'];

        $query="INSERT INTO comments (postID , commentDesc , commentAuthor )
                VALUES ('$id' , '$desc' , '$author')
                ";

        $result=mysqli_query($conn , $query);

        if($result) {
            echo "done";
        }

        header("location:".$_SERVER['HTTP_REFERER']);
    }
?>

<div class="panel-footer">

    <form  role="form" action=<?php echo "../include/commentform.php?id=".$_REQUEST['id'];?> method="post" >

      <div class="form-group">
        <div>
          <textarea class="form-control" id="commentDesc" placeholder="Comment here..." name="commentDesc">
          </textarea>
        </div>
      </div>

      <div class="form-group">
        <div>
          <button type="submit" class="btn btn-default pull-right" name="submit">Post</button>
        </div>
        <br>
      </div>

    </form>

</div>
