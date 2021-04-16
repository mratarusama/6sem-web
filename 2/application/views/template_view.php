<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js" type="module" defer></script>
    <script src="./js/history.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
<header>
    <span id="name">Игорь Маринин</span>
    <nav class="menu">
        <div class="menu_item"><a href="./main">Главная</a></div>
        <div class="menu_item"><a href="./About">Обо мне</a></div>
        <div class="menu_item"><a href="./Interests">Мои интересы</a></div>
        <div class="menu_item"><a href="./Study">Учеба</a></div>
        <div class="menu_item"><a href="./Album">Фотоальбом</a></div>
        <div class="menu_item"><a href="./Contact">Контакт</a></div>
        <div class="menu_item"><a href="./Test">Тест</a></div>
        <div class="menu_item"><a href="./History">История</a></div>
        <div class="menu_item"><a href="./GuestBook">Гостевая книга</a></div>
    </nav>
    <p id="timer">19.02.1992</p>
</header>

    <script>$('title').text('<?=$page_info[0]?>');$('.menu_item')[<?=$page_info[1]?>].classList.add('selected_item');</script>
    <?php include 'application/views/'.$content_view; ?>

	</body>
</html>