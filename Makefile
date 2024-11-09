unit:
	vendor/bin/phpunit -c ./phpunit.xml --colors $(if $(strip $(filter)),--filter=$(filter),)