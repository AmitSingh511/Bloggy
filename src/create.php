<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
        <div class="flex justify-center items-center mt-40">
            <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4 border-2 w-100 p-10">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="border-2 border-gray-600" required >
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="border-2 border-gray-600" required>
                <label for="content">Content</label>
                <select name="content[]" id="content" class="border-2 border-gray-600" multiple required>
                    <option value="Technology">Technology</option>
                    <option value="Education">Education</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Health">Health</option>
                    <option value="Other">Other</option>
                </select> <br><br>
                <input type="file" id="upload" name="upload" class="border-2 border-gray-600" required>
                <button type="submit" name="submit" class=" bg-green-500 p-1 rounded-xl">Upload</button> 
            </form>
    </div>
</body>

</html>

<?php
include "config.php";
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$author=$_POST['author'];
$content=implode(",",$_POST['content']);
$target_dir='../uploads/';
$target_file=$target_dir.basename($_FILES['upload']['name']);//upload/image.jpg
$file_type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$ext=['jpg','jpeg','png','gif','pdf'];
$ok=0;
$sql="insert into users (title,content,author,image) values ('$title','$author','$content','$target_file')";
   if($_FILES["upload"]["size"]>5000000) //file size validation
   {
    echo "file size should be 5MB or less";
    $ok=1;
   }
   elseif(!in_array($file_type,$ext))
   {
    echo "sorrry!only jpg,jpeg,png,gif and pdf is supported";
    $ok=1;
   }
    elseif ($ok==0) {
        if(move_uploaded_file($_FILES['upload']['tmp_name'],$target_file))
        {
            echo "";
        }
        else
        {
            echo 'sorry there was an error uploading the file';
        }
    }
    else
    {
        echo "sorry, theree was an issue in uploading a file, try agian later";
    }

}
if(mysqli_query($conn,$sql))
{
    echo "records inserted successfully";
}
else
{
    die ('error! try again later');
}
?>