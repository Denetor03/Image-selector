<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container w-100">
        <h1>p_jo</h1>
    </div>
    <div class="image-container" >
        <?php
            $paths = array(
                './img/*/',
                './img/*/*'
            );
            $images = [];
            foreach($paths as $path){
            foreach(glob("$path{*.gif,*.jpg,*.png,*.jpeg,*.webp}", GLOB_BRACE) as $image){
                array_push($images, $image);
            }}
            $n= array_rand($images,  1);
            echo '<img id="picture" src="'.$images[$n].'">';
        ?>
        <button onclick="location.reload()">Random</button>
    </div>
    <script>
        var img = document.getElementById('picture');
        var width = img.clientWidth;
        if(width < 800){
            img.style.width = 'auto';
            img.style.height = '800px';
            img.style.objectFit = 'scale-up';
        }
        if(width >= 800){
            img.style.width = 'auto';
            img.style.height = '800px'
            img.style.objectFit = 'scale-down';
        }
        
    </script>
</body>
</html>


