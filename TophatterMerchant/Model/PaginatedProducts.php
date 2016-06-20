<?php
namespace TophatterMerchant\Model;

class PaginatedProducts {
	private $paginated_products_hash;
	
	public function __construct($paginated_products_hash) {
		$this->paginated_products_hash = $paginated_products_hash;
	}
	
	public function getResults() {
		$products = array();
		foreach ($this->paginated_products_hash->results as $product) {
			$products[] = new Product($product);
		}
		return $products;
	}
	
	public function getFrom() {
		return $this->paginated_products_hash->from;
	}
	
	public function getTo() {
		return $this->paginated_products_hash->to;
	}
	
	public function getPage() {
		return $this->paginated_products_hash->page;
	}
	
	public function getPerPage() {
		return $this->paginated_products_hash->per_page;
	}
	
	public function getTotalEntries() {
		return $this->paginated_products_hash->total_entries;
	}
}