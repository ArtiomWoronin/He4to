//Принимаем данные
$myfile =  $_POST['myfile'];

//Формируем данные для записи в файл
$data =    . $_POST['myfile'] .  "\n";

// Записываем данные в файл
$file = fopen('place4txt.html', 'a');
fwrite($file, $data);
fclose($file);
