SHELL:=/bin/bash

db-init:
	./bin/console d:d:d --force --if-exists
	./bin/console doctrine:database:create
	./bin/console doctrine:migrations:execute --up 00000000000000 -q
	./bin/console doctrine:schema:create
	./bin/console doctrine:migrations:execute --up 20200407062350 -q
	./bin/console doctrine:fixtures:load -q
.PHONY : db-init

fix-load:
	./bin/console doctrine:fixtures:load -q
.PHONY : fix-load

phpcs:
	./vendor/bin/phpcs --standard=./ruleset.xml --extensions=php
.PHONY : phpcs

phpcbf:
	./vendor/bin/phpcbf --standard=./ruleset.xml --extensions=php
.PHONY : phpcbf

lint:
	./vendor/bin/parallel-lint --exclude tests/app --exclude vendor --exclude bin .
.PHONY : lint
