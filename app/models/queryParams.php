<?php
	class QueryParams {
    public $pageNumber;
    public $pageSize;
    public $orderField;
		public $order;
		
    public $startPurchaseDate;
    public $endPurchaseDate;
    public $categoryId;
    public $subcategoryId;
    public $startPrice;
    public $endPrice;
		public $sql;
    
    public function __construct($queryParams) {
			$this->order = array_values($queryParams)[7];

			$this->orderField = lcfirst(str_replace('sortBy', '', (array_keys($queryParams))[7]));
			$this->pageNumber = 0;
			$this->pageSize = 20;
			$this->sql = 'SELECT expenses.*, categories.name AS categoryName, subcategories.name AS subcategoryName FROM expenses	LEFT JOIN categories ON categories.id = expenses.categoryId LEFT JOIN subcategories ON subcategories.id = expenses.subcategoryId ';

			foreach($queryParams as $queryKey => $queryParam) {
				if(strpos($queryKey, 'Date')) {
					$queryParam = strtotime($queryParam);
				}
				$this->$queryKey = $queryParam;
			}
			$this->addFilterByVar($this->startPurchaseDate, $this->endPurchaseDate, 'purchaseDate');
			$this->addFilterByVar($this->categoryId, null, 'categoryId');
			$this->addFilterByVar($this->subcategoryId, null, 'subcategoryId');
			$this->addFilterByVar($this->startPrice, $this->endPrice, 'price');		
		}

		public function addFilterByVar($startVar, $endVar, $baseFieldName) {
			if ($this->sql == 'SELECT expenses.*, categories.name AS categoryName, subcategories.name AS subcategoryName FROM expenses	LEFT JOIN categories ON categories.id = expenses.categoryId LEFT JOIN subcategories ON subcategories.id = expenses.subcategoryId ') {
				$queryBefore = 'WHERE ';
			} else {
				$queryBefore = ' AND ';
			}
			if (($startVar) && ($endVar)) {
				$this->sql .= $queryBefore.$baseFieldName." BETWEEN ".$startVar." AND ".$endVar." ";
			} elseif (($startVar) || ($endVar)) {				
				$this->sql .= $queryBefore."expenses.".$baseFieldName."=";
				$this->sql .= $startVar ? $startVar : $endVar;
				} 
				

				

			}		
		}