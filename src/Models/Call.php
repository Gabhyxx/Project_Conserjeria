<?php

namespace App\Models;

use App\Database;

class Call {
	private $database;

	private ?int    $id;
	private string  $room;
	private string  $issue;
	private ?string $dateTime;
	private string  $table;

	public function __construct($id = null, $room = "", $issue = "", $dateTime = null) {
		$this->id = $id;
		$this->room = $room;
		$this->issue = $issue;
		$this->dateTime = $dateTime;
		$this->database = new Database();
		$this->table = "problems";
	}

	public function all() {
		$query = $this->database->mysql->query("SELECT * FROM {$this->table}");
		$callArray = $query->fetchAll();
		$callList = [];

		foreach ($callArray as $call) {
			$callItem = new Call($call["id"], $call["room"], $call["issue"], $call["date"]);
			array_push($callList, $callItem);
		}
		return $callList;
	}

	public function findById($id) {
		$query = $this->database->mysql->query("SELECT * FROM {$this->table} WHERE `id` = {$id}");
		$result = $query->fetchAll();

		return new Call($result[0]["id"], $result[0]["room"], $result[0]["issue"], $result[0]["date"]);
	}

	public function destroy() {
		$this->database->mysql->query("DELETE FROM {$this->table} WHERE `id` = {$this->id}");
	}

	public function save() {
		$this->database->mysql->query("INSERT INTO {$this->table} (`room`, `issue`) VALUES ('$this->room', '$this->issue')");
	}

	public function update($room, $issue) {
		$this->room = $room;
		$this->issue = $issue;

		$query = $this->database->mysql->query("UPDATE {$this->table} SET `room` = '{$this->room}', `issue` = '{$this->issue}' WHERE `id` = {$this->id}");
	}

	public function getId() {
		return $this->id;
	}

	public function getRoom() {
		return $this->room;
	}

	public function getIssue() {
		return $this->issue;
	}

	public function getDateTime() {
		return $this->dateTime;
	}
}

?>
