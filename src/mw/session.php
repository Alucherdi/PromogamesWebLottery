<?php
	$addSessionAttribute = function ($req, $res, $next) {
		$req = $req->withAttribute("session", $_SESSION);
		return $next($req, $res);
	};

	$isLogged = function ($req, $res, $next) {
		$req = $req->withAttribute("logged", true);
		$res = $next($req, $res);
		return $res;
	};
?>