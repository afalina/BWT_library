<?php
class ModelSearch extends Model
{
    public function getData($data)
    {
        \App\DB::init();
        $records = \App\Record::matching($data)
            ->with('book')
            ->get();
        return $records;
    }
}