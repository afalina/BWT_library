<?php
class ModelSearch extends Model
{
    public function getData($data)
    {
        $records = \App\Record::matching($data)
            ->with('book')
            ->get();
        return $records;
    }
}