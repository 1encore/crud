<?php

namespace App\Http\Controllers;

use App\Book;
use App\Library;

class BookController extends Controller implements Library
{
    /**
     * @param \App\int|int $id
     * @return Book
     */
    function getBookById($id): Book
    {
        return Book::findOrFail($id);
    }

    /**
     * @param \App\string|string $author
     * @return Book
     */
    function getBookByAuthor($author): Book
    {
        return Book::where('author', '=', $author)->firstOrFail();
    }

    /**
     * @param \App\string|string $name
     * @return Book
     */
    function getBookByName($name): Book
    {
        return Book::where('name', '=', $name)->firstOrFail();
    }

    /**
     * @param \App\int|int $year
     * @return Book
     */
    function getBookByYear($year): Book
    {
        return Book::where('year', '=', $year)->firstOrFail();
    }

    /**
     * @param \App\string|string $man
     * @return Book
     */
    function getBookByManufacture($man): Book
    {
        return Book::where('manufacture', '=', $man)->firstOrFail();
    }
}
