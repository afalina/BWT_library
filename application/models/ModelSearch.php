<?php
class ModelSearch extends Model
{
    public function getData($data)
    {
        \App\DB::init();
        $records = \App\Record::matching($data)
            ->with('book')
            ->limit(10)
            ->get();
        return $records;
    }
}