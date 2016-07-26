<?php
namespace App;

/** @Entity */
class Books
{
    /**
     * @id @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /** @Column */
    private $author;
    /** @Column */
    private $title;
    /** @Column(type="integer") */
    private $published_year;

    public function setBookInfo($author, $title, $published_year) {
        $this->author = $author;
        $this->title = $title;
        $this->published_year = $published_year;
    }

    /****
    * Get id
    *
    * @return int
    */
    public function getId()
    {
        return $this->id;
    }
}
?>