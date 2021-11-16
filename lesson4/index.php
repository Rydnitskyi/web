<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    <div class="gallery">
        <?php
            /* 
            1.  Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит все картинки 
                в уменьшенном виде и форму для загрузки нового изображения. При клике на фотографию она должна открыться в браузере в новой вкладке. 
                Размер картинок можно ограничивать с помощью свойства width. При загрузке изображения необходимо делать проверку на тип и размер файла.
            2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями. 
                Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
            */

            $gallery = './public/img';
            if(file_exists($gallery)){
                $images = [];
                $d = opendir($gallery);
                while($fileName = readdir($d)){
                    if($fileName == '.' || $fileName == '..' || is_dir($gallery.'/'.$fileName)) continue;
                    $images[] = $gallery.'/'.$fileName;
                }
                closedir($d);
            } else {
                echo 'Error';
            }

            if(!empty($images)){
                foreach($images as $image){
                    echo '<a target="_blank" href="' . $image . '"><img src="' . $image . '" width ="400px"></a>';
                }
            }
        ?>
    </div>
</body>
</html>
