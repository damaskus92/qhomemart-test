<?php

if (!function_exists('tanggal_indonesia')) {
    /**
     * Mengubah tanggal menjadi format tanggal Indonesia.
     *
     * @param string|\DateTimeInterface $date
     * @param string $format
     * @return string
     */
    function tanggal_indonesia($date, $format = 'd F Y')
    {
        $date = is_string($date) ? new \DateTime($date) : $date;
        $bulan = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember'
        ];

        $formatted_date = strtr($date->format($format), $bulan);
        return $formatted_date;
    }
}
