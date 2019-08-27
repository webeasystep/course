<?php

//This function inserts data into the database
function setComments($db)
{
    //Returns true if commentSubmit button is clicked
    if (isset($_POST['commentSubmit'])) {

        $user_id = $_POST['user_id'];
        $comment_date = $_POST['comment_date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments(user_id,comment_date, message) VALUES('$user_id','$comment_date','$message')";

        //Query the databse and stores it in a variable called result
        if (!$db->query($sql)) {
            printf("Error message: %s\n", $db->error);
            exit();
        }

    }
}

//This function retrieves data from the database
function getComments($db)
{
    $sql = "SELECT * FROM comments";

    // Creates a connection($conn) and then queries everthing selected from comments table
    if (!$result = $db->query($sql)) {
        printf("Error message: %s\n", $db->error);
        exit();
    }
    //$result->fetch_assoc()- Fetches result row from the database as an array
    //while loop means that everytime we have a result row from the database, it loops until there is no more left
    //while loop helps in echoing all results from the database at once
    while ($row = $result->fetch_assoc()) {
        //div class comment box is used to style the comment box
        echo "<div class='comment-box'> <p>";

        //$row['user_id']- Echoes name of the user from the database
        echo $row['user_id'] . "<br>";
        //$row['comment_date']- Echoes comment_date from the database
        echo $row['comment_date'] . "<br>";
        //$row['message']- Echoes message from the database
        //nl2br()- Is a function that converts nl to break statements
        echo nl2br($row['message']);

        //The 1st form below deletes user post
        //The 2nd form below takes information to the next page and updates the database
        echo "</p> 
				<form class= 'delete-form' method ='POST' action ='" . deleteComments($db) . "'>
					<input type='hidden' name='comment_id' value='" . $row['comment_id'] . "'>
					<button name='commentDelete'> Delete </button>
				</form>
				<form class= 'edit-form' method ='POST' action = 'edit_comment.php'>
					<input type='hidden' name='comment_id' value='" . $row['comment_id'] . "'>
					<input type='hidden' name='user_id' value='" . $row['user_id'] . "'>
					<input type='hidden' name='comment_date' value='" . $row['comment_date'] . "'>
					<input type='hidden' name='message' value='" . $row['message'] . "'>
					<button> Edit </button>
				</form>
			
			</div>";
    }
}

//Function for Editing comments
function editComments($db)
{
    if (isset($_POST['commentSubmit'])) {
        $comment_id = $_POST['comment_id'];
        $message = $_POST['message'];

        //Update table comments, set specific column message to new message from user
        $sql = "UPDATE comments SET message= '$message' WHERE comment_id='$comment_id' ";

        //Query the database and stores it in a variable called result
        if (!$result = $db->query($sql)) {
            printf("Error message: %s\n", $db->error);
            exit();
        }
        //Redirects to the front page
        header("Location: index.php");
    }
}

//Function for deleting comments
function deleteComments($db)
{
    if (isset($_POST['commentDelete'])) {
        $comment_id = $_POST['comment_id'];

        //Delete something from comments, where comment_id
        $sql = "DELETE FROM comments WHERE comment_id='$comment_id'  ";

        //Runs the query in the database and stores it in a variable called result
        if (!$result = $db->query($sql)) {
            printf("Error message: %s\n", $db->error);
            exit();
        }
        //Redirects to the front page
        header("Location: index.php");
    }
}

//login function
function getLogin($db)
{

    if (isset($_POST['loginSubmit'])) {

        $user_name = $_POST['user_name'];
        $password = md5($_POST['password']);

        //Selects everything(*) from table comments and stores it in a variable
        $sql = "SELECT * FROM users WHERE username= '$user_name' AND password= '$password' ";

        // Creates a connection($conn) and then query  everything selected from comments table
        $result = $db->query($sql);
        //mysqli_num_rows() - Counts the number of rows of element or variable between the brackets
        if (mysqli_num_rows($result) == 1) {
            if ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['id'];
                //Sends back to the index.php page and includes a mesaage(loginsuccess) after the url
                header("Location:index.php?loginsuccess");
                //Closes the script and prevents RESUBMISSION of the form
                exit();
            }
        } else {
            header("Location:index.php?loginfailed");
            var_dump($db->error);
            exit();
        }
    }
}

//logout function
function userLogout()
{
    if (isset($_POST['logoutSubmit'])) {
        //Starts the session
        session_start();
        //Destroys the session
        session_destroy();
        header("Location:index.php");
        exit();
    }
}

