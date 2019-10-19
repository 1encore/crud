<?php

namespace App;

class Book
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $author;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $year;
    /**
     * @var string
     */
    public $manufacture;

    /**
     * Book constructor.
     * @param int $id
     * @param string $author
     * @param string $name
     * @param int $year
     * @param string $manufacture
     */
    public function __construct(int $id, string $author, string $name, int $year, string $manufacture)
    {
        $this->id = $id;
        $this->author = $author;
        $this->name = $name;
        $this->year = $year;
        $this->manufacture = $manufacture;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year)
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getManufacture(): string
    {
        return $this->manufacture;
    }

    /**
     * @param string $manufacture
     */
    public function setManufacture(string $manufacture)
    {
        $this->manufacture = $manufacture;
    }
}
