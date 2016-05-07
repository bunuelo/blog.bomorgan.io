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
