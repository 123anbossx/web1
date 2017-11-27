<div id="bar" class=" col-md-3 ">
    <div id="policy">
        <div class="title"><a href="welcome/lists/3">政策法规</a></div>
        <ul class="article-list">
            <?php
            foreach ($types as $type) {
                if ($type->type_id == 3) {
                    foreach ($type->articles as $article) {
                        ?>
                        <li class="article">
                            <a href="welcome/article/<?php echo $article->article_id; ?>"><?php echo $article->title; ?></a>

                        </li>
                        <?php

                    }
                }
            } ?>
        </ul>


    </div>

</div>
