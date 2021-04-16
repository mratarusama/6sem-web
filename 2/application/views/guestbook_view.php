<link rel="stylesheet" href="./css/guestbook.css">

<?php
    $fName = "messages.inc";
    if(isset($_POST['fio'])){
        $file = fopen($fName, 'a+');
        $message = htmlentities($_POST['fio'])."\x11".$_POST['email']."\x11".htmlentities($_POST['feedback'])."\x11".date('d.m.y')."\x11\x15";
        fwrite($file, $message);
        fClose($file);
    }
?>

<div id="content">
    <form action="" method="POST">
        <div class="formEl"><label for="fio">ФИО: </label> <input type="text" name="fio"></div>
        <div class="formEl"><label for="email">Почта: </label> <input type="email" name="email"></div>
        <div class="formEl"><label for="feedback">Отзыв: </label> <textarea name="feedback" id="" cols="30" rows="10"></textarea></div>
        <div id="finalBtns">
            <input class="button" type="submit" value="Send">
            <input class="button" type="reset" value="Reset">
        </div>
    </form>
    <div id="messages">
        <?php
            $file = fopen($fName, 'r+');
            $fSize = filesize($fName);
            if($fSize > 0) {
                $content = fread($file, $fSize);
                $messages = explode("\x15", $content);
                foreach ($messages as $message) {
                    if (strlen($message) > 0) {
                        $message = explode("\x11", $message);
                        echo "<p class=\"message\">(".$message[3].") <a href=\"mailto:" . $message[1] . "\">" . $message[0] . "</a>: " . $message[2] . "</p>";
                    }
                }
            } else {
                echo "<p class='message'>Звук сверчков...</p>";
            }
            fclose($file);
        ?>
    </div>
</div>

