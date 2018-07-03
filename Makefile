init: 
	@echo Setting hookspath
	git config core.hooksPath .githooks


unmake:
	@echo Unsetting hookspath
	git config --unset core.hooksPath