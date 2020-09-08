<?php

require "MemberRepository.php";

class TestMemberRepository {

	public function save() {
		$memberRepository = new MemberRepository();
		return $memberRepository->save(["name" => "PMS"]);
	}

}

$testMemberRepository = new TestMemberRepository();
var_dump($testMemberRepository->save());