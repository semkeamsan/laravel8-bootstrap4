<?php

function sql_with_bindings($query)
{
    return vsprintf(str_replace('?', '%s', $query->toSql()), collect($query->getBindings())->map(function ($binding) {
        return is_numeric($binding) ? $binding : "'{$binding}'";
    })->toArray());
}
function slug($string)
{

    $t = $string;

    $specChars = array(
        ' ' => '-',    '!' => '',    '"' => '',
        '#' => '',    '$' => '',    '%' => '',
        '&' => '',    '\'' => '',   '(' => '',
        ')' => '',    '*' => '',    '+' => '',
        ',' => '',    '₹' => '',    '.' => '-',
        '/-' => '',    ':' => '',    ';' => '',
        '<' => '',    '=' => '',    '>' => '',
        '?' => '',    '@' => '',    '[' => '',
        '\\' => '',   ']' => '',    '^' => '',
        '_' => '',    '`' => '',    '{' => '',
        '|' => '',    '}' => '',    '~' => '',
        '-----' => '-',    '----' => '-',    '---' => '-',
        '/' => '',    '--' => '-',   '/_' => '-',

    );

    foreach ($specChars as $k => $v) {
        $t = str_replace($k, $v, $t);
    }
    return strtolower($t);
}
