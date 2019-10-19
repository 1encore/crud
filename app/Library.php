<?php

namespace App;

interface Library
{
    const BOOKS_PER_PAGE = 5;

    /**
     * @param int $id
     * @return Book
     */
    function getBookById(int $id) : Book;

    /**
     * @param string $author
     * @return Book
     */
    function getBookByAuthor(string $author) : Book;

    /**
     * @param string $name
     * @return Book
     */
    function getBookByName(string $name) : Book;

    /**
     * @param int $year
     * @return Book
     */
    function getBookByYear(int $year) : Book;

    /**
     * @param string $man
     * @return Book
     */
    function getBookByManufacture(string $man) : Book;
}
