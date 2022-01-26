<?php


	class Item {

		private int $id;
		public string $name = '';
		public int $status = 0;
		public bool $changed = false;

		public function __construct(int $id) {
			$this->id = $id;
			$this->init();
		}

		private function init() {
			$this->name = $this->table('name')
			$this->status = $this->table('status');
		}

		public function __set($name, $value) {
			
			if(isset($this->$name)) {
				if(gettype($this->$name) === gettype($value)) {
					$this->$name = $value;
				}else{
					throw new Exception('Некорректный тип данных для свойства');
				}
			}

			if(!isset($this->$name)) {
				throw new Exception('Свойство не найдено');
			}

			if(gettype($this->$name) !== gettype($value)) {
				throw new Exception('Невозможно изменить значение свойства, так как типы данных не совпадают');
			}

			if($name === 'id') {
				throw new Exception('Данное свойство нельзя менять');
			}

			if(strlen($value) < 1) {
				throw new Exception('Значение не может быть пустым');
			}

			$this->$name = $value;
		}

		public function __get($name) {
			return $this->$name;
		}

		public function save() {
			//var_dump($this);
		}

		private function table($name) {
			$table = ['objects' => [
				1 => [
						'id' => 1,
						'name' => 'First name',
						'status' => 1
					],
				2 => [
						'id' => 2,
						'name' => 'Secondary',
						'status' => 1
					]
			]];

			return $table['objects'][$this->id][$name];
		}
	}


	$item = new Item(1);

	echo "<pre>";
	print_r($item);