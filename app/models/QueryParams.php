<?php

namespace app\models;

class QueryParams
{
	public $pageNumber;
	public $pageSize;
	public $orderField;
	public $order;

	public $startPurchaseDate;
	public $endPurchaseDate;
	public $startUpdatedDate;
	public $endUpdatedDate;
	public $categoryId;
	public $subcategoryId;
	public $startPrice;
	public $endPrice;

	public function __construct()
	{
		$this->order = 'DESC';
		$this->orderField = 'purchaseDate';
		$this->pageNumber = 0;
		$this->pageSize = 20;
	}

	public static function CreateFromQuery()
	{
		if (is_null($_POST)) {
			return null;
		}

		$result = new QueryParams;

		foreach ($_POST as $name => $value) {
			$result->$name = $value;
		}
		
		return $result;
	}
}