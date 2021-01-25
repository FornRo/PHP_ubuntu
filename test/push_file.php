<?php
    function can_upload($file){
    // если имя пустое, значит файл не выбран
    if($file['name'] == '')
        return 'Вы не выбрали файл.';

    /* если размер файла 0, значит его не пропустили настройки
    сервера из-за того, что он слишком большой */
    if($file['size'] == 0)
        return 'Файл слишком большой.';

    // разбиваем имя файла по точке и получаем массив
    $getMime = explode('.', $file['name']);
    // нас интересует последний элемент массива - расширение
    $mime = strtolower(end($getMime));
    // объявим массив допустимых расширений
    $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

    // если расширение не входит в список допустимых - return
    if(!in_array($mime, $types))
        return 'Недопустимый тип файла.';

    return true;
    }

    function make_upload($file){
    // формируем уникальное имя картинки: случайное число и name
    $name = mt_rand(0, 10000) . $file['name'];
//    copy($file['tmp_name'], 'img/' . $name);
    }
?>


<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form class="form-signin m-5" enctype="multipart/form-data" method="post">
    <div class="text-center mb-4">
        <h3 class="h3 mb-3 font-weight-normal">push file</h3>
    </div>


    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    <div class="form-label-group w-50 mx-auto">
        <label for="file">Отправить этот файл: </label><br/>
        <input name="file" type="file" /><br/>
        <input type="submit" value="Push file" />
    </div>
    <!--    <button class="btn btn-lg btn-primary btn-block" type="submit">Push file</button>-->
</form>

<div class="container text-center form-label-group w-50 mx-auto">
    <p class="text-success bg-dark m-3">
        <?php
        // если была произведена отправка формы
        if(isset($_FILES['file'])) {
            // проверяем, можно ли загружать изображение
            $check = can_upload($_FILES['file']);

            if($check === true){
                // загружаем изображение на сервер
                make_upload($_FILES['file']);
                echo "<strong>Файл успешно загружен!</strong>";
            }
            else{
                // выводим сообщение об ошибке
                echo "<strong>$check</strong>";
            }

        }
        ?>
    </p>
</div>
<div class="container text-center form-label-group w-75 mx-auto">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">tmp_name</th>
            <th scope="col">error</th>
            <th scope="col">size</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <?php
//            foreach ($_FILES["file"] as $key => $value) {
//                echo "<td>$value</td>";
//            }
            $format = '<td>%s</td>';
            echo sprintf($format, $_FILES["file"]["name"]);
            echo sprintf($format, $_FILES["file"]["type"]);
            echo sprintf($format, $_FILES["file"]["tmp_name"]);
            echo sprintf($format, $_FILES["file"]["error"]);
            echo sprintf($format, $_FILES["file"]["size"]);

            ?>

        </tr>
        </tbody>
    </table>
</div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">
                <?php

    //            var_dump($_SESSION);
                    var_dump($_FILES);

                ?>
            </span>
        </div>
    </footer>

