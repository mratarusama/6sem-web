<link rel="stylesheet" href="./css/Photos.css">

<div id="black-block">
    <img src="" alt=""/>
    <input id="back-button" type="button" value="Назад" style="left:38%;bottom:10%;" onclick="clickBack();"/>
    <input id="next-button" type="button" value="Далее" style="left:58%;bottom:10%;" onclick="clickNext();"/>
    <input id="hide-button" type="button" value="Готово" style="left:48%;bottom:10%;" onclick="whiteFunction();"/>
</div>

<div id="content">
    <?php
    $rows = 3;
    $columns = 6;
    $index = 0;
    $end = 0;
    for ($i = 0; $i < $rows; $i++)
    {
        echo "<div class=\"row\">";
        for ($j = 0; $j < $columns; $j++)
        {
            if($end) break;
            $currPic = $i * $columns + $j;
            if($currPic == sizeof($fotos)-1)
                $end = 1;

            echo '<figure><img src='.$fotos[$i*$columns+$j].' title="'.$titles[$i*$columns+$j].'" onclick="imgClick('.($index+1).')"> <figcaption class="picDesc">'.$titles[$i*$columns+$j].'</figcaption> </figure>';
            $index++;
        }
        echo '</div>';
    }
    ?>
    <script type="text/javascript">
        let fotos = <?=json_encode($fotos)?>;
        let titles = <?=json_encode($titles)?>;
        let black = $("#black-block");
        let img = $("<img/>");
        let i = 0;

        $('img').each((i, e)=>{
            $(e).attr('onclick', `imgClick(${i})`)
        });

        function imgClick(index)
        {
            i = index;

            black.show(1000).append(
                img.show(1000)
                    .attr('src', fotos[index-1])
                    .attr('alt', titles[index-1])
                    .attr('title', titles[index-1])
            );
        }

        function clickNext()
        {
            if(i < 15)
            {
                i++
                img.hide(300);
                setTimeout(() => imgClick(i), 300);
            }
        }

        function clickBack()
        {
            if(i > 1)
            {
                i--;
                img.hide(300);
                setTimeout(() => imgClick(i), 300);
            }
        }

        function whiteFunction()
        {
            img.hide(1000);
            black.hide(1000);
        }
    </script>
</div>