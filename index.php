<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Роман Преминин</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>phpGallery</h1>
    </div>

    <div class="page-header">
        <h3>Загрузка нового изображения</h3>
    </div>

    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="file"/>
        <input type="submit" value="Загрузить"/>
    </form>

    <?php
    function uploadsFiles()
    {
        foreach ($_FILES as $file) {
            $fileType = explode("/", $file['type'])[0];
            if ($file['error'] != 0) {
                $message = "Произошла ошибка загрузки данных №: " . $file['error'] . "!";
            } elseif ($fileType != "image") {
                $message = "Неверный тип файла: " . $file['name'] . "!";
            } else {
                move_uploaded_file($file['tmp_name'], "./img/" . $file['name']);
                $message = "Загрузка файла: " . $file['name'] . " успешно выполнена!";
            }
            echo '<div class="page-header"><h4>' . $message . '</h4></div>';
        }
    }
    if (!empty($_FILES)) {
        uploadsFiles();
    }
    function scanDirectory()
    {
        $dir = opendir("./img/");
        while ($filename = readdir($dir)) {
            if (!is_dir($filename)) {
                $fileType = explode("/", mime_content_type("./img/" . $filename))[0];
                if ($fileType == "image") {
                    $files[] = $filename;
                }
            }
        }
        closedir($dir);
        return $files;
    }
    function renderGallery()
    {
        echo '<div class="page-header">';
        echo '<h3>Содержимое каталога: ./img/</h3>';
        echo '</div>';
        echo '<div class="row">';
        $files = scanDirectory();
        if(count($files) > 0) {
            foreach ($files as $fileName) {
                $fileNameFull = "./img/" . $fileName;
                echo '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 thumb">';
                echo '<a href="' . $fileNameFull . '" target="_blank">';
                echo '<img class="img-responsive" src="' . $fileNameFull . '"/></a></div>';
            }
        } else {
            echo '<div class="page-header"><h4>Каталог пуст</h4></div>';
        }
        echo '</div>';
    }
    renderGallery();
    ?>

</div>
</body>
</html>