<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    <title>Сдам ЕГЭ</title>
</head>
<body>
<div class="header">
    
</div>
<div class="content">
    <div class="task">
        <p class="taskTitle">Задание №{{$task_id or '0'}}</p>
        <p class="taskText">{!! nl2br($task_text)!!}</p>
        <div class="taskImages">

        </div>
    </div>


</div>
<div class="footer">
    <div class="creators">
        <p class="authors"> Сайт разработан командой профессиональных разработчиков: </p>
        <a href="https://vk.com/kostyn_kem" class="authorsLinks" id="djkostya"> djkostya </a>
        <a href="https://vk.com/run_away_please" class="authorsLinks" id="finch"> Michael Finch </a>
        <a href="https://vk.com/id224573689" class="authorsLinks" id="knyz">Grandpa Maksim  (Knyz`)</a>
    </div>
</div>
    
</body>
</html>
