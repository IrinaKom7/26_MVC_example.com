<div class="header_content_mainline">Портфолио </div>
<p>
<table>

<tr><td>Год</td><td>Сайты</td><td>Информация</td>

<?php

    foreach($data as $row) {
        echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
    }
?>
</table>
</p>