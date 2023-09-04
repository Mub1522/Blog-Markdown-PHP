<?php
namespace Mub\Blog\Model;

class url
{
    public static function getRootPath()
    {
        //substr: Agarramos desde la posicion 0 del DIR, y con la funcion strpos, le decimos que al DIR, solo le deje hasta donde termina la ruta en src.
        return substr(__DIR__, 0, strpos(__DIR__, 'src') + 4);
    }
}