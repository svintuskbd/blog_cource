<?php require_once 'header.php'; ?>
<?php //var_dump(deleteArticle(6)); ?>
      <!-- Page Heading -->
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>
      <div class="row">
  		<?php $articles = getArticles(); ?>
  		<?php if (is_array($articles) && !empty($articles)): ?>
	  		<?php foreach ($articles as $article): ?>
		        <div class="col-lg-4 col-sm-6 portfolio-item">
		          <div class="card h-100">
		            <a href="single.php?article=<?php echo $article['id']; ?>"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
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
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
<?php require_once 'footer.php'; ?>
