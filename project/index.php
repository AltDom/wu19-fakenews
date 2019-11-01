<?php

declare(strict_types=1);

require __DIR__.'/header.php'; ?>

    <?php foreach ($articles as $article) : ?>
        <section class="article-grid"> <!-- each article sits inside a grid which holds two grids; one for the author img and one for the post -->
            <div class="img-grid">
            <img class="author-img" src="<?= $article['author_image']?>" alt="author">
            </div>
            <div class="post-grid">
                <div class="title"><?= $article['title']?></div> <!-- article title -->
                <div class="content"><?= nl2br($article['content']) ?></div> <!-- article contents with html line breaks inserted when a new line is detected -->
                <div class="article-details"> <!-- article details at the bottom of each article e.g. author, date and likes -->
                    <div class="box">
                        <div class="publisher"><?= $article['author'] ?> </div> <!-- article's author -->
                        <div class="date"><?= $article['published_date'] ?></div> <!-- date article published -->
                    </div>
                    <div class = "counters">
                        <div class="likes"><img src="like.png" width=25px height=25px alt="like"></div> <!-- how many people like this article -->
                        <div class = "likes-counter"><?= $article['like_counter']?></div>
                        <div class="dislikes"><img src="dislike.png" width=25px height=25px alt="dislike"></div> <!-- how many people dislike this article -->
                        <div class = "dislikes-counter"><?= $article['dislike_counter']?></div>
                    </div>
                </div>
            </div>
        </section>
        <hr class = "heading-rule">
    <?php endforeach;

require __DIR__.'/footer.php'; ?>

