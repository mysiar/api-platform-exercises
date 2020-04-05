SHELL:=/bin/bash

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
