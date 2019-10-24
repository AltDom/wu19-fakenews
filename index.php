<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
declare(strict_types=1);

require __DIR__.'/data.php';
require __DIR__.'/header.php'; ?>

<?php foreach ($articles as $article) : ?>
    <div class="wrapper">
        <section>

<div class="title"><?= $article['title']?></div> <!-- article title -->
<div class="content"><?= nl2br($article['content']) ?></div> <!-- article contents with html line breaks when new line detected -->
<div class="info">
<div class="publisher"><?= $article['author'].' '.$article['published_date']?></div> <!-- date article published -->
<div class="likes">Likes: <?= $article['like_counter']?></div> <!-- how many people like this article -->
</div> <!-- article info -->
</section> <!-- section -->
</div> <!-- wrapper -->
<hr>
<?php endforeach;

require __DIR__.'/footer.php'; ?>

