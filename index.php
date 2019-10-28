<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
declare(strict_types=1);

require __DIR__.'/data.php';
require __DIR__.'/header.php'; ?>

<?php foreach ($articles as $article) : ?>
    <div class = "banner">
        <section class='article-grid'>
            <div class='img-grid'>
            <img class='author-img' src="<?= $article['author_image']?>" alt="">
            </div>
            <div class='post-grid'>
                <div class="title"><?= $article['title']?></div> <!-- article title -->
                <div class="content"><?= nl2br($article['content']) ?></div> <!-- article contents with html line breaks when new line detected -->
                <div class="article-details">
                    <div class="publisher"><?= $article['author'].' | '.$article['published_date']?></div> <!-- date article published -->
                    <div class = 'counters'>
                        <div class="likes"><img src="like.png" width=25px height=25px alt=""></div> <!-- how many people like this article -->
                        <div class = "likes-counter"><?= $article['like_counter']?></div>
                        <div class="dislikes"><img src="dislike.png" width=25px height=25px alt=""></div>
                        <div class = "dislikes-counter"><?= $article['dislike_counter']?></div>
                    </div>
                </div> <!-- article details -->
            </div>
        </section> <!-- section for each article -->
    </div> <!-- banner -->
    <hr class = "heading-rule">
<?php endforeach;

require __DIR__.'/footer.php'; ?>

