<?php
// Class Book for create method
class Book
{
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;
    public function __construct($title, $availableCopies)
    {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method
    public function getTitle()
    {
        $bookName = $this->title;
        return $bookName;
    }

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies()
    {
        $copies = $this->availableCopies;
        return $copies;
    }

    // TODO: Add borrowBook method

    public function borrowBook()
    {
        $this->availableCopies = $this->availableCopies - 1;
        return $this->availableCopies;
    }

    // TODO: Add returnBook method 
    public function returnBook()
    {
        $this->availableCopies = $this->availableCopies + 1;
        return $this->availableCopies;
    }
}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Output1 "Available Copies of 'Book Name': Quantity
echo "Available Copies of " . "'{$book1->getTitle()}'" . ": {$book1->getAvailableCopies()}\n";
echo "Available Copies of " . "'{$book2->getTitle()}'" . ": {$book2->getAvailableCopies()}\n";


class Member
{
    // TODO: Add properties as Private
    private $name;
    public function __construct($name)
    {
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method
    public function getName()
    {
        $memberName = $this->name;
        return $memberName;
    }

    // TODO: Add borrowBook method
    public $book;
    public function borrowBook($book)
    {
        $this->book = $book;
        $book->borrowBook() . "\n";
        echo "Available Copies of " . "'{$book->getTitle()}'" . ": {$book->getAvailableCopies()}\n";
    }

    // TODO: Add returnBook method

    public function returnBook($book)
    {
        $this->book = $book;
        $book->returnBook() . "\n";
        echo "Available Copies of " . "'{$book->getTitle()}'" . ": {$book->getAvailableCopies()}\n";
    }
}

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

echo "Name: " . "{$member1->getName()}" . "\n";
echo "Name: " . "{$member2->getName()}" . "\n";


$member1->borrowBook($book1);
$member2->borrowBook($book2);


