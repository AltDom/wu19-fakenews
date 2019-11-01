<?php

declare(strict_types=1);

require __DIR__.'/headerSQL.php'; ?>

<?php $PDO = new PDO("sqlite:fakenews.db"); ?> <!-- read in data from sql database file (.db) -->
<?php $allData = $PDO->query("SELECT * FROM articles"); ?>
<?php $articles = $allData->fetchAll(PDO::FETCH_ASSOC); ?>

    <?php foreach ($articles as $article) : ?>
        <section class='article-grid'> <!-- each article sits inside a grid which holds two grids; one for the author img and one for the post -->
            <div class='img-grid'>
            <img class='author-img' src="<?= $article['authorimage']?>" alt="">
            </div>
            <div class='post-grid'>
                <div class="title"><?= $article['title']?></div> <!-- article title -->
                <div class="content"><?= nl2br($article['content']) ?></div> <!-- article contents with html line breaks inserted when a new line is detected -->
                <div class="article-details"> <!-- article details at the bottom of each article e.g. author, date and likes -->
                    <div class="box">
                        <div class="publisher"><?= $article['author'] ?> </div> <!-- article's author -->
                        <div class="date"><?= $article['publisheddate'] ?></div> <!-- date article published -->
                    </div>
                    <div class = 'counters'>
                        <div class="likes"><img src="like.png" width=25px height=25px alt=""></div> <!-- how many people like this article -->
                        <div class = "likes-counter"><?= $article['likescounter']?></div>
                        <div class="dislikes"><img src="dislike.png" width=25px height=25px alt=""></div> <!-- how many people dislike this article -->
                        <div class = "dislikes-counter"><?= $article['dislikescounter']?></div>
                    </div>
                </div>
            </div>
        </section>
        <hr class = "heading-rule">
    <?php endforeach;

require __DIR__.'/footer.php'; ?>
