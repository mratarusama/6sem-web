<div id="content">
<?php
echo '<figure><figcaption>Быстрая навигация по странице:</figcaption><ul>';
foreach($data as $interest){
    echo '<li><a href="#'.$interest['anchor'].'">'.$interest['title'].'</a></li>';
}
echo '</ul></figure><br/><br/><br/>';
foreach($data as $interest){
    echo '<div class="desc_item"><h1 id="'.$interest['anchor'].'">'.$interest['title'].'</h1><br/>';
    foreach($interest['text'] as $paragraph){
        echo '<p>'.$paragraph.'</p>';
    }
}
?>
</div>
