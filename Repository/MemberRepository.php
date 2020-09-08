<?php

require "MemberInterface.php";
require "Member.php";

class MemberRepository implements MemberInterface {

	protected $member;

	public function __construct() {
		$this->member = new Member();
	}

	public function save($data) {
		$this->member->name = $data["name"];
		return $this->member;
	}
}