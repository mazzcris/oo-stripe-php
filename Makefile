unit:
	vendor/bin/phpunit -c ./phpunit.xml --colors --display-phpunit-deprecations $(if $(strip $(filter)),--filter=$(filter),)