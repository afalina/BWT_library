<?php
namespace App;

/** @Entity */
class Records 
{
    /**
     * @id @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /** @Column(type="integer") */
    private $book_id;
    /** @Column(type="text") */
    private $record;

    public function setRecord($book_id, $record) {
        $this->book_id = $book_id;
        $this->record = $record;
    }
}
?>