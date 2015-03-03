# Coding Standards

This repository contains the [PHPCodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) configuration for PHP 
coding standards used for all projects. The file is an extension on the PSR-2 defaults. And can be used by any PHP 
project.

## Installation

Add the project to your `composer.json` file. 

```
"require-dev": {
    "polderknowledge/coding-standards" : "dev-master"
},
```

Set the standard attribute in your build script to:

```xml
<phpcodesniffer standard="${project.basedir}/vendor/polderknowledge/coding-standards/PolderKnowledge/ruleset.xml">
    <!-- rest of your phpcodesniffer target -->
</phpcodesniffer>
```
