<?php
   include_once('./function/make_upload.php');
//    include_once('');
?>



<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form class="form-signin m-5" enctype="multipart/form-data" method="post">
    <div class="text-center mb-4">
        <h3 class="h3 mb-3 font-weight-normal">Push file</h3>
    </div>

    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    <div class="form-label-group w-50 mx-auto">
        <label for="file">Отправить этот файл: </label>
        <input name="file" type="file" />
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
