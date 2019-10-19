<?php


namespace App\Http\Controllers;


use App\Book;
use App\Library;
use Illuminate\Support\Facades\DB;

class BookController extends Controller implements Library
{

    /**
     * @param int $id
     * @return Book
     */
    function getBookById(int $id): Book
    {
        $query = DB::table('books')
            ->find($id);

        return new Book(
            $query->id,
            $query->author,
            $query->name,
            $query->year,
            $query->manufacture
        );
    }

    /**
     * @param string $author
     * @return Book
     */
    function getBookByAuthor(string $author): Book
    {
        $query = DB::table('books')
            ->where('author', $author)
            ->first();

        return new Book(
            $query->id,
            $query->author,
            $query->name,
            $query->year,
            $query->manufacture
        );
    }

    /**
     * @param string $name
     * @return Book
     */
    function getBookByName(string $name): Book
    {
        $query = DB::table('books')
            ->where('name', $name)
            ->first();

        return new Book(
            $query->id,
            $query->author,
            $query->name,
            $query->year,
            $query->manufacture
        );
    }

    /**
     * @param int $year
     * @return Book
     */
    function getBookByYear(int $year): Book
    {
        $query = DB::table('books')
            ->where('year', $year)
            ->first();

        return new Book(
            $query->id,
            $query->author,
            $query->name,
            $query->year,
            $query->manufacture
        );
    }

    /**
     * @param string $man
     * @return Book
     */
    function getBookByManufacture(string $man): Book
    {
        $query = DB::table('books')
            ->where('manufacture', $man)
            ->first();

        return new Book(
            $query->id,
            $query->author,
            $query->name,
            $query->year,
            $query->manufacture
        );
    }
}
