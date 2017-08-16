<?php 
	$validateUser = function ($req, $res, $next) {
		$logged = $req->getAttribute("logged");
		if (!$logged) {
			$res = $next($req, $res)->withRedirect("/login");
		} else {
			$res = $next($req, $res);
		}
		return $res;
	};
?>