<?php

if (! function_exists('adminUrl'))
{
    /**
     * @param $uri
     * @return string
     */
    function adminUrl($uri)
    {
        $baseURI = env('ADMIN_URL' , 'ct');
        $path = $baseURI . '/' . $uri;

        return $path;
    }
}

if (! function_exists('imagePath'))
{
    /**
     * @param $fileName
     * @return string
     */
    function imagePath ($fileName) {

        return public_path('images/') . $fileName;

    }
}

if (! function_exists('strSlug'))
{
    /**
     * @param $string
     * @param string $separator
     * @return string
     */
    function strSlug($string, $separator = '-')
    {
        $flip = $separator == '-' ? '_' : '-';

        $string = preg_replace('!['.preg_quote($flip).']+!u', $separator, $string);

        // Replace @ with the word 'at'
        $string = str_replace('@', $separator.'at'.$separator, $string);

        // Remove all characters that are not the separator, letters, numbers, or whitespace.
        $string = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', mb_strtolower($string));

        // Replace all separator characters and whitespace by a single separator
        $string = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $string);

        return trim($string, $separator);
    }
}

if (! function_exists('checkActiveMenu'))
{
    /**
     * @param $name
     * @param string $class
     * @return string
     */
    function checkActiveMenu($name, $class = 'active')
    {
        if (is_array($name)) {
            foreach ($name as $item) {
                if (request()->route() != null && strpos(request()->route()->getName(), $item) !== false) {
                    return $class;
                }
            }

            return '';
        } else {
            if (request()->route() != null && strpos(request()->route()->getName(), $name) !== false) {
                return $class;
            } else {
                return '';
            }
        }
    }
}

if (! function_exists('traverse_farsi'))
{
    /**
     * @param $str
     * @return mixed
     */
    function traverse_farsi($str)
    {
        $farsiChars = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $latinChars = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($latinChars , $farsiChars , $str);
    }
}

if (! function_exists('traverse_english'))
{
    /**
     * @param $str
     * @return mixed
     */
    function traverse_english($str)
    {
        $farsiChars = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $latinChars = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($farsiChars , $latinChars , $str);
    }
}

if (! function_exists('picUrl'))
{
    /**
     * @param $fileName
     * @return string
     */
    function picUrl($fileName)
    {
        return public_path($fileName);
    }
}

if (! function_exists('generateRandomCode'))
{
    /**
     * @param int $length
     * @return bool|string
     */
    function generateRandomCode($length = 6)
    {
        return substr(md5(microtime()),rand(0,26),$length);
    }
}

if (! function_exists('getPersianDay'))
{
    /**
     * @param $number
     * @return mixed
     */
    function getPersianDay($number)
    {
        return str_replace(
            array('Sat', 'Sun', 'Mon', 'Thu', 'Wed' ,'Tue', 'Fri'),
            array('شنبه', 'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه'),
            $number);
    }
}

if (! function_exists('menuOpen'))
{
    /**
     * @param $string
     * @param $uri
     * @return string
     */
    function openMenu ($string , $uri)
    {
        return (str_is('*' .$string . '*' , $uri)) ? ' menu-open' : '';
    }
}

if (! function_exists('showMenu'))
{
    /**
     * @param $string
     * @param $uri
     * @return string
     */
    function showMenu ($string , $uri)
    {
        return (str_is('*' .$string . '*' , $uri)) ? ' display:block' : '';
    }
}
