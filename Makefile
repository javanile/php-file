test:
	@docker run -v $(PWD):/app -w /app php:7.0 php -f tests/test.php
