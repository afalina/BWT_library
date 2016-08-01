<?php
class ModelSearch extends Model
{
    public function getData($data)
    {
        $data = escape_html($data);
        $records = \App\Record::matching($data)
            ->with('book')
            ->limit(50)
            ->get();
        return $records;
    }
}