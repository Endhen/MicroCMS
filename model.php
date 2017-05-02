<?php

function getArticles() {
    $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'microcms_user', 'secret');
    $articles = $bdd->query('SELECT * FROM t_article ORDER BY art_id DESC');
    return $articles;
}
