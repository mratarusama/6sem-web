<link rel="stylesheet" href="./css/Contacts.css">
<link rel="stylesheet" href="./css/calendar.css">
<script type="text/javascript" src="./js/contacts.js" defer></script>
<script type="text/javascript" src="./js/calendar.js" defer></script>;

<div id="modal">
    <p>Вы действительно хотите отправиь форму?</p>
    <input id="confirmSubmit" type="button" value="Отправить"/>
    <input id="abortSubmit" type="button" value="Отмена"/>
</div>

<div id="content">
    <form action="" method="POST">
        <?php
        if(isset($data))
          echo "<div style=\"border-radius: 20px 20px 0 0;text-align: center;width: 100%;background-color:#8CCB5E\"><p>".$data."</p></div><br/>";
        ?>
        <div data-tooltip = "Три слова, каждое минимум в два символа">
            Введите фамилию, имя и отчество: <br>
            <input class="inputText" type="text" name="fio"> <br><br>
        </div>


        <div>
            Ваш пол:
            <input type="radio" id="radioMale" name="sex" value="1" checked>
            <label for="radioMale">Мужской</label> /

            <input type="radio" id="radioFemale" name="sex" value="0">
            <label for="radioFemale">Женский</label><br><br>
        </div>

        <div>
            Выберите ваш возраст:
            <select name="age">
                <option value="17-" selected>17-</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21+">21+</option>
            </select>
        </div><br><br>


        <div data-tooltip = "Начинается с 7 или с 3. Максимум - 9 или 11 цифр.">
            Введите ваш номер телефона: <br>
            <input class="inputText" type="text" name="phone">
        </div>

        <br><br>

        <section data-tooltip = "Выберите месяц и год, и кликните по числу даты рождения">
            <label id="input-date" for="input-date">Дата рождения: <div id="date-value"></div></label>
            <div>
                <div>
                    <select class="" name="" id="year-selection"></select>
                    <select class="" id="year-select"></select>
                    <table>
                        <tbody id="calendar-body">
                        <tr class="celendar-days">
                            <td class="celendar-words">Понедельник</td>
                            <td class="celendar-words">Вторник</td>
                            <td class="celendar-words">Среда</td>
                            <td class="celendar-words">Четверг</td>
                            <td class="celendar-words">Пятница</td>
                            <td class="celendar-words">Суббота</td>
                            <td class="celendar-words">Воскресенье</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        Введите ваш почтовый адрес: <br>
        <input data-tooltip="Введите адрес Вашей электронной почты" class="inputText" type="email" name="email" required> <br><br>

        <textarea data-tooltip="Введите сообщение, которое хотите отправить (хоть один символ)" name="msg" id="msg" cols="30" rows="10" class="inputText"></textarea> <br><br>
        <div id="finalBtns">
            <input class="button" type="submit" value="Send" data-tooltip="Отправить сообщение">
            <input class="button" type="reset" value="Reset" data-tooltip="Обнулить все поля">
        </div>
        <br>
    </form>
</div>
