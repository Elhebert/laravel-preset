workflow "New workflow" {
  on = "push"
  resolves = ["PHPStan"]
}

action "PHPStan" {
  uses = "./.github/phpstan"
}
