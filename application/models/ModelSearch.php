<?php
class ModelSearch extends Model
{
    public function getData($data)
    {
        require ($_SERVER['DOCUMENT_ROOT'].'/Capsule.php');

        $records = \App\Record::matching($data)
            ->with('book')
            ->limit(10)
            ->get();
        return $records;
    }
}