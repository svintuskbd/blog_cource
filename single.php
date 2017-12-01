<?php require_once 'header.php'; ?>
<!-- Page Heading -->
<h1 class="my-4">Single article</h1>
<div class="row">
    <?php $articles = getArticle($_GET['article']); ?>
    <?php if (is_array($articles) && !empty($articles)): ?>
        <?php foreach ($articles as $article): ?>
            <div class="col-lg-10 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/700x400" alt="">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $article['title']; ?>
                        </h4>
                        <p class="card-text"><?php echo $article['text']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="card-text"><?php displayNotFoundText(); ?></p>
    <?php endif; ?>
</div>
<!-- /.row -->

<?php require_once 'footer.php'; ?>
