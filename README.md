Generate code snippets
======================

Generate API documentation as RST files out of PHP files.

The code is extracted from [TYPO3-Documentation/t3docs-codesnippets](https://github.com/TYPO3-Documentation/t3docs-codesnippets)
to run without a TYPO3 installation.

To generate documentation add a `codesnippets.php` file with the following content:

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
php bin/run.php </path/to/codesnippets.php>
```

For now it is just a proof of concept.

To do:
- Test with other libraries
- Clean up of code
- Add CI workflow
