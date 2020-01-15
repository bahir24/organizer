<?php

class QueryParams
{
    public $pageNumber;
    public $pageSize;
    public $orderField;
    public $order;

    public function __construct()
    {
        $this->order = 'ASC';
        $this->orderField = 'id';
        $this->pageNumber = 0;
        $this->pageSize = 2;
    }
}