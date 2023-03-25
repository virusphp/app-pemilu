<?php
function rupiah($uang)
{
    return number_format($uang, 2, ',', '.');
}

function status($nilai)
{
    if ($nilai == 1) {
        $status = 'acc';
    } elseif ($nilai == 2) {
        $status = 'proses';
    } else {
        $status = 'ditolak';
    }
    return $status;
}
