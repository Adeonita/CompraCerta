@php

function formatMoney($input)
{
    // return preg_replace('/\./', ',', round($input, 2));
    return number_format($input, 2, ',');
}
@endphp
