<?php
/**
 * Created by PhpStorm.
 * User: Ahmed.Fakhr
 * Date: 2019-08-27
 * Time: 4:47 PM
 */

# 1- copy lesson_4 and name it to image_uploader

# 2- add new directory with the name (assets) , put 10 images on it (jpg,png,gif)
#   add another direction with the name (uploaded_images) and keep it empty

# 3- change function name import_quotes to (upload_images) and functionality to the following :
        # function will allow jpg or png images only
        # function will allow image size for under 100 kb only
        # function will save all these images on (uploaded_images) directory
        # function will redirect to the index page with success messages
        # for every check you should display validation message

# 4- change read function to read all images from (uploaded_images) directory
     # send it to index.php as two columns ,one for image name and second for image itself
     # keep delete and edit buttons to use them for options

# 5- change delete function to be able to delete images



#Hints
# for step 4 you could use files functions to read image names ,and save it into array