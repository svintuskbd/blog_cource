<?php require_once 'header.php'; ?>

<!-- Page Heading -->
<h1 class="my-4" id="title">Page Heading
    <small id="small">Secondary Text</small>
</h1>

<?php
//var_dump($_POST['article']);
//if (isset($_POST['article']['search']) && !empty($_POST['article']['search'])) {
//    $articles = searchArtickle($_POST['article']['search']);
//
//    var_dump($articles);
//}

?>

<form id="formx" action="javascript:void(0);" method="POST" onsubmit="search()">
    <p><input type="title" name="searchString" value=""></p>
    <p><input type="submit"></p>
</form>
<div class="row">
    <?php
        $articles = getArticles();
    ?>
    <?php if (is_array($articles) && !empty($articles)): ?>
        <?php foreach ($articles as $article): ?>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="single.php?article=<?php echo $article['id']; ?>"><img class="card-img-top"
                                                                                    src="http://placehold.it/700x400"
                                                                                    alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="single.php?article=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
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
<?php


?>
<!-- /.row -->
<script>
    function search() {
        var msg   = $('#formx').serialize();

        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: msg,
            success: function(msg){
                console.log(msg);
                $('#title').html();
                $('#title').html(msg);
            }

        });
    }

</script>
<?php require_once 'footer.php'; ?>
