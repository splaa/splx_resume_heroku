<?php
/**
 * Определяет является ли строка поиска  - поиском по id
 * @param  string  $q
 * @param  null  $id
 * @param  string  $name
 * @return bool
 */

function is_id_term(string $q, &$id = null, string $name = 'id'): bool
{
    $q = trim($q);
    $is_id = preg_match("/^$name:\s*(\d+)$/i", $q, $matches );
    if ($is_id === 1) {
        $id = (int) $matches[1];
        return true;
    }
    return false;
}
