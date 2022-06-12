<?php
include "function/function.php";
if(isset($_POST["ok"]))
{
    Patient::add_new();
}
$patients = Patient::show_all();
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
            <h2>Список пациентов</h2>
            <a href="new_patient.html" class="add">новый пациент</a>
        </div>

        <table>
                <tr>
                    <td colspan="9"></td>
                </tr>
                <tr class="first-line">
                    <th>ФИО</th>
                    <th>Пол</th>
                    <th>Дата рождения</th>
                    <th>Рост, см</th>
                    <th>Вес, кг</th>
                    <th>Диагноз</th>
                </tr>
                <tr>
                    <td colspan="9" class="shape"></td>
                </tr>
                
                <?php
                $count=1;
                foreach($patients as $patient) {
                    if($count%2==0)
                {echo '<tr class="second-line">
                    <td class="fio">'.$patient->second_name.' '.$patient->first_name.' '.$patient->middle_name.'</td>
                    <td>'.$patient->male.'</td>
                    <td>'.$patient->birthday.'</td>
                    <td>'.$patient->height.'</td>
                    <td>'.$patient->weight.'</td>
                    <td>'.$patient->diagnosis.'</td>
                    <td>
                        <a href="user.html"><img src="edit-2 1.png" id="edit" width="22"></a>
                    </td>
                    <td>
                        <a href=""><img src="trash 1.png" id="trash" width="21"></a>
                    </td>
                    <td>
                        <a href="info.php"><img src="Group 12.png" id="more" width="23"></a>
                    </td>
                </tr>';}
                else {
                    echo '<tr class="third-line">
                    <td class="fio">'.$patient->second_name.' '.$patient->first_name.' '.$patient->middle_name.'</td>
                    <td>'.$patient->male.'</td>
                    <td>'.$patient->birthday.'</td>
                    <td>'.$patient->height.'</td>
                    <td>'.$patient->weight.'</td>
                    <td>'.$patient->diagnosis.'</td>
                    <td>
                        <a href="user.html"><img src="edit-2 1.png" id="edit" width="22"></a>
                    </td>
                    <td>
                        <a href=""><img src="trash 1.png" id="trash" width="21"></a>
                    </td>
                    <td>
                        <a href="info.php"><img src="Group 12.png" id="more" width="23"></a>
                    </td>
                </tr>';}
                $count++;
                } ?>
        </table>
        <div>
            <img src="Vector.png" class="wave" width="500"/>
        </div>
    </div>
    </body>
</html>