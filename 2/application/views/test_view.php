<link rel="stylesheet" href="./css/Test.css">
<script type="text/javascript" src='./js/test.js' defer></script>

<div id="content">
    <form action="" method="POST">
        <?php
          $colors = Array("#FF033E", "#FFDB8B", "#98FB98", "#47A76A");
          if(isset($data))
            echo "<div style=\"border-radius: 20px 20px 0 0;text-align: center;width: 100%;background-color: ".$colors[$data]."\"><p>".$data."/3</p></div><br/>";
        ?>
        Введите фамилию, имя и отчество:
        <input type="text" name="fio" pattern="([а-яА-яa-zA-Z]{2,} [а-яА-яa-zA-Z]{2,} [а-яА-яa-zA-Z]{2,})" required> <br><br>

        Выберите вашу учебную группу:
        <select name="group">
            <optgroup label="1 курс">
                <option value="ИС/б-20-1-о">ИС/б-20-1-о</option>
                <option value="ИС/б-20-2-о">ИС/б-20-2-о</option>
                <option value="ИС/б-20-3-о">ИС/б-20-3-о</option>
                <option value="ПИ/б-20-1-о">ПИ/б-20-1-о</option>
            </optgroup>
            <optgroup label="2 курс">
                <option value="ИС/б-19-1-о">ИС/б-19-1-о</option>
                <option value="ИС/б-19-2-о">ИС/б-19-2-о</option>
                <option value="ИС/б-19-3-о">ИС/б-19-3-о</option>
                <option value="ПИ/б-19-1-о">ПИ/б-19-1-о</option>
            </optgroup>
            <optgroup label="3 курс">
                <option value="ИС/б-18-1-о">ИС/б-18-1-о</option>
                <option value="ИС/б-18-2-о">ИС/б-18-2-о</option>
                <option value="ИС/б-18-3-о">ИС/б-18-3-о</option>
                <option value="ПИ/б-18-1-о">ПИ/б-18-1-о</option>
            </optgroup>
            <optgroup label="4 курс">
                <option value="ИС/б-17-1-о">ИС/б-17-1-о</option>
                <option value="ИС/б-17-2-о">ИС/б-17-2-о</option>
                <option value="ИС/б-17-3-о">ИС/б-17-3-о</option>
                <option value="ПИ/б-17-1-о">ПИ/б-17-1-о</option>
            </optgroup>
            <optgroup label="5 курс">
                <option value="ИС/м-16-1-о">ИС/м-16-1-о</option>
                <option value="ИС/м-16-2-о">ИС/м-16-2-о</option>
                <option value="ИС/м-16-3-о">ИС/м-16-3-о</option>
                <option value="ПИ/м-16-1-о">ПИ/м-16-1-о</option>
            </optgroup>
            <optgroup label="6 курс">
                <option value="ИС/м-15-1-о">ИС/м-15-1-о</option>
                <option value="ИС/м-15-2-о">ИС/м-15-2-о</option>
                <option value="ИС/м-15-3-о">ИС/м-15-3-о</option>
                <option value="ПИ/м-15-1-о">ПИ/м-15-1-о</option>
            </optgroup>
        </select> <br><br>

        <h3>Ответьте на следующие три вопроса:</h3> <br><br><br>

        <h1>Вопрос 1</h1><br>
        <p>Какое поле появляется вокруг любого предмета?</p>
        <textarea name="ans1" cols="30" rows="10"></textarea> <br><br>

        <h1>Вопрос 2</h1> <br>
        <p>Два ведра до краев наполнены водой. В одном из них плавает кусок дерева. Какое ведро перевесит?</p>
        <div id="ans2_ans">
            <div class="ans2_radio">
                <input id="ans2_first" type="radio" name="ans2" value="1" checked>
                <label for="ans2_first">Перевесит ведро с деревяшкой</label>
            </div>

            <div class="ans2_radio">
                <input id="ans2_second" type="radio" name="ans2" value="2">
                <label for="ans2_second">Перевесит ведро с водой</label>
            </div>

            <div class="ans2_radio">
                <input id="ans2_thrid" type="radio" name="ans2" value="3">
                <label for="ans2_thrid">Никакое ведро не перевесит</label>
            </div>

        </div> <br><br>

        <h1>Вопрос 3</h1> <br>
        <p>На каком инструменте играл Альберт Эйнштейн с юных лет?</p>
        <select name="ans3">
            <option value="1">Гитара</option>
            <option value="2">Пианино</option>
            <option value="3">Скрипка</option>
        </select>

        <div id="finalBtns">
            <input class="button" type="submit" value="Send">
            <input class="button" type="reset" value="Reset">
        </div>
    </form>
</div>
