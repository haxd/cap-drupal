<?php

	class Item {
		private $basic = 0;
		private $vat = 0;
		private $description;
		private $group = '';

		public function __construct($desc, $basic, $vat, $grp = '') {
			$this->basic = $basic;
			$this->vat = $vat;
			$this->description = $desc;
			$this->group = $grp;
		}

		public function price($vat = true) {
			return round(
				$vat == true ?
					floatval($this->basic) + floatval($this->vat)
				: floatval($this->basic)
			, 2);
		}

		public function desc() {
			return $this->description;
		}

		public function vat() {
			return $this->vat;
		}

		public function group() {
			return $this->group;
		}
	}

	class Cart {
		public $uuid;
		private $items = array();
		private $quantity = array();

		public function __construct($serial = null) {
			$this->uuid = uniqid('capcart_');

			if ($serial !== null) {
				foreach ($serial as $item) {
					for ($i = 0; $i < $item['quantity']; $i++)
						$this->addItem($item['item'], $item['price'], $item['vat'], $item['group']);
				}
			}
		}

		public function addItem($item, $price, $vat, $grp) {
			$newitem = new Item($item, $price, $vat, $grp);

			$this->items[$item] = $newitem;
			$this->quantity[$item]++;
		}

		public function removeItem($item) {
			if (isset($this->items[$item])) {
				if ($this->quantity[$item] > 1) {
					$this->quantity[$item]--;
				} elseif ($this->quantity[$item] == 1) {
					unset($this->quantity[$item]);
					unset($this->items[$item]);
				}
			}
		}

		public function getCart() {
			$tmp_items = array();

			foreach ($this->items as $item) {
				$tmp_items[] = array(
					'item' => $item->desc(),
					'quantity' => $this->quantity[$item->desc()],
					'price' => $item->price(false),
					'vat' => $item->vat(),
					'group' => $item->group(),
				);
			}

			return $tmp_items;
		}

		public function getTotal() {
			$total = 0;
			foreach ($this->items as $item) {
				for ($i = 0; $i < $this->quantity[$item->desc()]; $i++)
					$total += $item->price(false);
			}

			return $total;
		}

		public function getTotalIncVAT() {
			$total = 0;
			foreach ($this->items as $item) {
				for ($i = 0; $i < $this->quantity[$item->desc()]; $i++)
					$total += $item->price(true);
			}

			return $total;
		}
	}
