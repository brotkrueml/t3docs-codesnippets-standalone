Generate code snippets
======================

Generate API documentation as RST files out of PHP files.

The code is extracted from [TYPO3-Documentation/t3docs-codesnippets](https://github.com/TYPO3-Documentation/t3docs-codesnippets)
to run without a TYPO3 installation.

To install it, run:

```bash
composer req --dev brotkrueml/t3docs-codesnippets-standalone
```

To generate API documentation add a `codesnippets.php` file in your project, for example:

```php
<?php
return [
    [
        "action" => "createPhpClassDocs",
        "class" => \YourVender\YourPackage\Path\To\Your\Class::class,
        "targetFileName" => "your_class.rst.txt",
        "withCode" => false
    ],
];
```

To create/update the code snippets just execute:

```bash
vendor/bin/generate-codesnippets </path/to/codesnippets.php>
```

The path must be without `codesnippets.php`!

For now, it is just a proof of concept.

To do:
- Clean up of code
- More documentation
- Add CI workflow
