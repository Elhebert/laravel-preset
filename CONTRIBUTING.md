# Contributing

Contributions are **welcome** and will be fully **credited**. We accept contributions via Pull Requests on [Github](https://github.com/Elhebert/laravel-preset).

Please read and understand the contribution guide before creating an issue or pull request.

## Viability

When requesting or submitting new features, first consider whether it might be useful to others. Open
source projects are used by many developers, who may have entirely different needs to your own. Think about
whether or not your feature is likely to be used by other users of the project.

## Procedure

Before submitting a pull request:

- Check the codebase to ensure that your feature doesn't already exist.
- Check the pull requests to ensure that another person hasn't already submitted the feature or fix.

## Requirements

If the project maintainer has any additional requirements, you will find them listed here.

- Make sure your code is properly linted to match our coding style. 
    - **[PSR-2 Coding Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)**.

    - We are using [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) to help us keep our code clean and coherent. You can use `./vendor/bin/php-cs-fixer fix --allow-risky yes` or `composer format` to fix your code.

- Make sure to write **tests**!

- **Document any change in behaviour** - Make sure the `README.md` and any other relevant documentation are kept up-to-date.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please [squash them](http://www.git-scm.com/book/en/v2/Git-Tools-Rewriting-History#Changing-Multiple-Commit-Messages) before submitting.

**Happy coding**!
