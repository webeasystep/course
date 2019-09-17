<?php
    if(isset($_POST['submit'])) {

        session_start();
        include("../db/dbconnect.php");

        $id=$_REQUEST['id'];
        $desc=$_POST['comment_desc'];
        $author=$_SESSION['user_name'];

        $query="INSERT INTO comments (post_id , comment_desc , comment_author )
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

    <form  role="form" action=<?php echo "../include/comment_form.php?id=".$_REQUEST['id'];?> method="post" >

      <div class="form-group">
        <div>
          <textarea class="form-control" id="comment_desc" placeholder="Comment here..." name="comment_desc">
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
