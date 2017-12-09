<?php
require "Article.php";
require "Car.php";

session_start();
const TITLE_BLOG = 'My first blog';



function connectDb()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=blog_cource', 'root', '19888813');

        return $dbh;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";

        return false;
    }
}

function searchArtickle($title)
{
//    $db = connectDb();
//    if ($db) {
//        $search = '%'.$title.'%';
//        $stmt = $db->prepare("SELECT * FROM article WHERE title LIKE :needle");
//        $stmt->bindValue(':needle', $search, PDO::PARAM_STR);
//        $stmt->execute();
//
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }
//
//    return false;

    echo $_POST;
}

function insertArticle($title, $text)
{
    $db = connectDb();
    if ($db) {
        $sql = "INSERT INTO article(title, text) VALUES ( :title,  :text)";

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':text', $text, PDO::PARAM_STR);

        $stmt->execute();
    }
}

function getArticles()
{
    $db = connectDb();
    if ($db) {
        $sql = "SELECT article.*, user.name
                FROM article
                LEFT JOIN user ON article.id=user_id";

        return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    return false;
}

function getArticle($id)
{
    $db = connectDb();
    if ($db) {
        $sql = "SELECT * FROM article WHERE id=$id";

        return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    return false;
}

function updateArticle($article, $id)
{
    $db = connectDb();
    if ($db) {
        $sql = "UPDATE article 
              SET title = '" . $article['title'] . "', text = '" . $article['text'] . "' 
              WHERE id = $id";

        return $db->prepare($sql)->execute();
    }

    return false;
}

function deleteArticle($id)
{
    $db = connectDb();
    if ($db) {
        $sql = "DELETE FROM article WHERE id=$id";

        return $db->prepare($sql)->execute();
    }

    return false;
}

function getTitleBlog()
{
    return TITLE_BLOG;
}

function displayTitleBlog()
{
    echo TITLE_BLOG;
}

function displayNotFoundText()
{
    echo 'Not found articles';
}

function calc($arg1, $arg2, $action)
{
    if ($action == '+') {
        return ['arg1' => $arg1, 'arg2' => $arg2, 'action' => $action, 'result' => $arg1 + $arg2];
    } elseif ($action == '-') {
        return ['arg1' => $arg1, 'arg2' => $arg2, 'action' => $action, 'result' => $arg1 - $arg2];
    } elseif ($action == '*') {
        return ['arg1' => $arg1, 'arg2' => $arg2, 'action' => $action, 'result' => $arg1 * $arg2];
    } elseif ($action == '/') {
        return ['arg1' => $arg1, 'arg2' => $arg2, 'action' => $action, 'result' => $arg1 / $arg2];
    }

    return false;
}