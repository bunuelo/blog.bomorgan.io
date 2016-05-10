default: print-usage

print-usage:
	@echo "USAGE"
	@echo ""
	@echo "  make <command>"
	@echo ""
	@echo "COMMANDS"
	@echo ""
	@echo "  print-usage"
	@echo "  git-pull"
	@echo "  git-add"
	@echo "  git-commit"
	@echo "  git-push"
	@echo "  git-development-cycle"
	@echo ""

COMMIT_MESSAGE="editing..."

git-pull:
	git pull

git-add:
	git add --all

git-commit:
	-git commit -am "$(COMMIT_MESSAGE)"

git-push:
	git push

git-development-cycle:
	make git-pull; make git-add; make git-commit; make git-push
