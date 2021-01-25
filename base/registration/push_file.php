<?php
    require 'function/make_upload.php';
?>
<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form class="form-signin m-5" enctype="multipart/form-data" method="post">
    <div class="text-center mb-4">
        <h3 class="h3 mb-3 font-weight-normal">Push file</h3>
    </div>

    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    <div class="form-label-group w-50 mx-auto">
        <label for="file">Send this file:</label>
        <input class="form-control-file" name="file" type="file" />
        <input type="submit" value="Push file" />
    </div>
    <br>
<!--    <div class="custom-file">-->
<!--        <input type="file" class="custom-file-input" id="customFile">-->
<!--        <label class="custom-file-label" for="customFile">Choose file</label>-->
<!--    </div>-->
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
                echo "<strong>File uploaded successfully!</strong>";
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