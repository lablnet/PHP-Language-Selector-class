# PHP Language Selector class

## This package Can help create website support multi-language.

This package support
1. Language string/code seperate form html/php.
2. If language string/key not found in language file it return key that you supply/provide.
3. Require  String class https://github.com/Lablnet/PHP-String-class

## Description
This package can get texts for the current language from globals.
It can set the current application language to a certain language by specifying the associated language identifier name.
The class can load the texts for the specified language from scripts that are loaded dynamically.
Those scripts contain code that set a global variable with an array of texts which defines the translation of each string to the language that is set.
