<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('task', ['task_id' => 24, 'task_text'=>'24 задание - первое задание второй части ЕГЭ по информатике. Суть задания: вам представлена программа, в которой допущены ошибки. Вам необходимо сделать следующее: а) написать что выведет программа при вводе данных чисел; б) Написать число, при котором программа, не смотря на ошибки, выведет правильный ответ; в) Найти 2 ошибки в данной программе, выписать их, а затем исправить. Рекомендованно выполнять данное задание за 10-15 минут. Необходимые знания для выполнения данного задания: циклы, условия, присваивание и остальные элементарные знания. 24 задание - первое задание второй части ЕГЭ по информатике. Суть задания: вам представлена программа, в которой допущены ошибки. Вам необходимо сделать следующее: а) написать что выведет программа при вводе данных чисел; б) Написать число, при котором программа, не смотря на ошибки, выведет правильный ответ; в) Найти 2 ошибки в данной программе, выписать их, а затем исправить. Рекомендованно выполнять данное задание за 10-15 минут. Необходимые знания для выполнения данного задания: циклы, условия, присваивание и остальные элементарные знания.']);
});
