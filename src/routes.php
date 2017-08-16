<?php
$app->add($addSessionAttribute);

$app->get("/", function ($req, $res) {
	return $this->renderer->render($res, "index.phtml");
})->add($validateUser)->add($isLogged);

$app->get("/play", function ($req, $res, $args) {
	$this->logger->info("Route /play");
	return $this->renderer->render($res, "play.phtml");
})->add($validateUser)->add($isLogged);

$app->get("/login", function ($req, $res) {
	$this->logger->info("Route /login");
	return $this->renderer->render($res, "login.phtml");
});