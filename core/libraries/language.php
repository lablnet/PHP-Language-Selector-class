<?php
/**
 * print language string.
 *
 * @param (string) $key key of language
 *
 * @return string
 */
function printl($key)
{
    $lang = new Language();

    return $lang->LangPrint($key);
}
