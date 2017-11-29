<?php
const TITLE_BLOG = 'My first blog';

function getTitleBlog() {
	return TITLE_BLOG;
}

function displayTitleBlog() {
	echo TITLE_BLOG;
}

function generateArticle($quantity) {
	$articles = [];
	for ($i = 0; $i < $quantity; $i++) { 
		$articles[$i]['title'] = 'Title'.$i;
		$articles[$i]['content'] = $i.'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!';
	}

	return $articles;
}

function displayNotFoundText() {
	echo 'Not found articles';
}