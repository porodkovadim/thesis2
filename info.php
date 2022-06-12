<?php
include "function/function.php";
$values = Values::head_show(1);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>СРИАД - система регистрации и анализа движений</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div class="container">
        <div class="head">
            <div class="image-flex">
                <img src="Group 9.svg"/>
            </div>
                <p class="def">Система регистрации и анализа движений</p>
        </div>
        
        <div class="add-button"> 
            <h2>Карточка пациента</h2>
            <a href="index.php" class="add">все пациенты</a>
        </div>

        <div class="info">
            <table>
                <tr>
                    <th class="name">Породько Вадим Евгеньевич</th>
                    <th class="edit">
                        <a href="edit.html"><img src="edit-2 1.png" width="22"></a>
                    </th>
                    <th class="trash">
                        <a><img src="trash 1.png" width="21"></a>
                    </th>
                    <th colspan="3">
                    </th>
                </tr>
                <tr>
                    <td>Пол:</td>
                    <td>Дата рождения:</td>
                    <td>Рост, см:</td>
                    <td>Вес, кг:</td>
                    <td>Диагноз:</td>
                </tr>
                <tr>
                    <td class="gender">муж</td>
                    <td class="birth">01.06.2000</td>
                    <td class="high">176</td>
                    <td class="weight">80</td>
                    <td class="problem">лишний вес</td>
                    <td>
                        <div class="list">
                            <select>
                                <option value="GRR">2022-12-12</option>
                                <option value="GRRR">2022-12-12</option>
                                <option value="GRRR">2022-12-12</option>
                                <option value="GRRR">2022-12-12</option>
                                <option value="GRRR">2022-12-12</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="graphics">
            <table class="choice">
                <tr class="test">
                    <td class="parametr">
                        <a href="index.html">Параметр1</a>
                    </td>
                    <td class="parametr">Параметр2</td>
                    <td class="parametr"> Параметр3</td>
                    <td class="parametr">Параметр4</td>
                    <td class="parametr">Параметр5</td>
                    <td class="parametr">Параметр6</td>
                </tr>
            </table>
        </div>

        <div class="graph"> 
            <h2>График</h2>
            <a href="" class="add">прогноз</a>
        </div>

        <canvas id="myChart"></canvas>

        <div>
            <img src="Vector.png" class="wave" width="500"/>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script>
        let ctx = document.querySelector('#myChart').getContext('2d');
        ctx.canvas.parentNode.style.height="450px";
        let myChart = new Chart (ctx, {
            type: 'line',
            data: {
            labels: [<?php
            $count=1;
            foreach($values as $value){
                echo $count.',';
                $count++;
            }?>],
            datasets: [{
                label: 'SMA',
                data: [<?php
            foreach($values as $value){
                echo $value->axel_x.'';
            }?>],
                backgroundColor: ['white'],
                borderColor: [
                    '#F54E2A',
                ],
            borderWidth: 3
            },{
                label: 'Результаты экспериментов',
                data: [<?php
            foreach($values as $value){
                echo $value->axel_y.'';
            }?>],
                backgroundColor: ['white'],
                borderColor: [
                    '#105492',
                ],
            borderWidth: 3
            }], 
        },
        options: {
        maintainAspectRatio: false,
        }
    })
    </script>
    </body>
</html>