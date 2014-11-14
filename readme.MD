# Coding standards

This repository contains the phpcodesniffer configuration for php coding standards used for all projects. The file is an extension on the PSR-2 defaults. And can be used by any php project.

## How to use
Add the project to your `composer.json` file. 

```
    "require-dev": {
        "youngguns/coding-standards" : "dev-master@dev"
    },
```

set the standard attribute in your build script to 

```xml
 <phpcodesniffer
            standard="${project.basedir}/vendor/youngguns/coding-standards/Youngguns.xml">
    <!-- rest of your phpcodesniffer target -->
</phpcodesniffer>
```
