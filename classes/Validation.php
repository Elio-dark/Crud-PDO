<?php

class Validation {

	public function data($input) {
		$result = trim($input);
		$result = htmlspecialchars($result);

		return $result;
	}

	public function nomeCheck($input) {
		$data = $this->data($input);

		if (is_numeric($data)) {
			return 0;
			exit();
		} else {
			return $data;
		}
	}

	public function emailCheck($input) {
		$data = $this->data($input);
		$data = filter_var($data, FILTER_SANITIZE_EMAIL);

		if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
			return 0;
			exit();
		} else {
			return $data;
		}
	}

	public function idadeCheck($input) {
		$data = $this->data($input);
		$data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);

		if (is_numeric($data)) {
			if (filter_var($data, FILTER_VALIDATE_INT)) {
				return $data;
			} else {
				return 0;
				exit();
			}
		}
	}
}