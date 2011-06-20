<?php
spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', trim($class, '\\')) . '.php';
});
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__DIR__) . '/library');



$book = new Composite\Book('JPauli Book');
$c1   = new Composite\HtmlElements\Chapter('chapter 1');
$c1->addNode(new Composite\HtmlElements\SimpleText('Composite design pattern'));
$book->addNode($c1);

$c2 = new Composite\HtmlElements\Chapter('chapter No=2');

$book->addNode($c2);
$book->addNode(new Composite\HtmlElements\Paragraph('End of the book'));

$page = new Composite\HtmlElements\Page(__DIR__ . '/_files/file.txt');

$c2->addNode($page);
$page->addNode(new Composite\Line());

echo $book; /* here we go */