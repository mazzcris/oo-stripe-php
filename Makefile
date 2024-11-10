test:
	vendor/bin/phpunit -c ./phpunit.xml --colors --display-deprecations $(if $(strip $(filter)),--filter=$(filter),)

unit:
	vendor/bin/phpunit -c ./phpunit.xml --colors $(if $(strip $(filter)),--filter=$(filter),)