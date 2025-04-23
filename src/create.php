<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Document</title>
    <script src="create.js" defer></script>
</head>

<body class="font-sans text-gray-800">
        <div class="flex justify-center items-center min-h-screen bg-gray-100">
            <form method="post" enctype="multipart/form-data" class="flex flex-col gap-4  w-full max-w-md p-10 shadow-[0_0_10px_rgba(255,255,255,0.6)] bg-orange-200 rounded-xl">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class=" bg-gray-200 h-8 rounded-md" required >
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class=" bg-gray-200 h-8 rounded-md" required>
                <label for="content">Content</label>
                <select name="content[]" id="content" class=" bg-gray-200 rounded-md " multiple required>
                    <option value="Technology">Technology</option>
                    <option value="Education">Education</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Health">Health</option>
                    <option value="Other">Other</option>
                </select> <br><br>
                <div id="drop-zone" class=" border-2 border-dashed rounded-2xl text-center border-gray-400 p-10 cursor-pointer transition hover:border-orange-500 w-full  overflow-hidden">
                    <p class="text-lg ">Drag and Drop Your File here</p>
                    <p class="dark: text-gray-500">or Click To Upload</p>
                <input type="file" id="upload" name="upload" class="hidden " accept="image/*" required>
                <div id="preview"></div>
                </div>
                <button type="submit" name="submit" class=" bg-green-500 p-1 rounded-xl cursor-pointer">Upload</button> 
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


if(mysqli_query($conn,$sql))
{
    echo "records inserted successfully";
}
else
{
    die ('error! try again later');
}
}
?>