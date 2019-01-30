workflow "Analyse code for errors" {
  on = "push"
  resolves = ["PHPStan"]
}

action "PHPStan" {
  uses = "./.github/phpstan"
}
