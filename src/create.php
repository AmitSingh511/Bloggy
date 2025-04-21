<?php
include "config.php";
?>
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
                <input type="text" id="title" name="title" class="input" required >
                <label for="author">Author</label>
                <input type="text" id="author" name="author" required>
                <label for="content">Content</label>
                <select name="content[]" id="content" multiple required>
                    <option value="Technology">Technology</option>
                    <option value="Education">Education</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Health">Health</option>
                    <option value="Other">Other</option>
                </select> <br><br>
                <input type="file" id="upload" name="upload" required>
                <button type="submit">Upload</button>
            </form>
    </div>
</body>

</html>