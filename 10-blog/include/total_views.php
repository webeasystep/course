<?php

/* increament post view by 1 */
function increment_views($id , $author) {
  /* check if already exixts or not ? */

  include("../db/dbconnect.php");

  $query="SELECT * FROM user_post WHERE post_id='$id' ";

  $result=mysqli_query($conn , $query);

  if($result==true) {
      /* Record is already availeble*/
      if(mysqli_num_rows($result) == 1) {
          while($row = mysqli_fetch_assoc($result)) {
              $views=$row['post_views'];
              $views = $views + 1;

              $query="UPDATE user_post SET post_views='$views'  WHERE post_id='$id'";
              $res=mysqli_query($conn , $query);

              if($res) {
                  //echo "Successfully updated views";
              } else {
                  echo "Problem updating views";
              }

              return $row['post_views'];
          }
      } else {
          //printf("Post record is not availbel");

          $query="INSERT INTO user_post (post_author , post_id ,post_likes , post_dislikes ,post_comments ,post_views)
                  VALUES ('$author' , '$id' , '0' , '0' , '0' , '1')";
          $result=mysqli_query($conn , $query);

          if($result) {
               //echo "*************  New record inserted successfully  okay ***********";
               return 1;
          } else {
              echo "Problem in inserting the post";
          }
      }
  } else {
      echo "Failed to load views";
  }

}

return 0;

?>
/*  Just finds total views */
<?php
function showViews($id , $author)  {
  include("../db/dbconnect.php");

  $query="SELECT *  FROM user_post  WHERE post_id='$id' ";

  $result=mysqli_query($conn , $query);

  if($result) {
      if(mysqli_num_rows($result)==1) {
        while($row=mysqli_fetch_assoc($result)) {
            return $row['post_views'];
        }
      } else {
        return 0;
      }

  }

  return 0;
}
?>
