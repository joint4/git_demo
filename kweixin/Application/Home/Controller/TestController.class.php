<?php

namespace Home\Controller;

class TestController extends HomeController {
	function extensions() {
		$token = M ( 'member_public' )->order ( 'is_use desc' )->getField ( 'token' );
		$res = M ( 'extensions' )->where ( 'id>0' )->setField ( 'token', $token );
	}
}
