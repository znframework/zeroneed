<?php namespace ZN\Shopping;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

class Select extends CartExtends
{
    /**
     * Select all items
     * 
     * @param void
     * 
     * @return array
     */
    public function items() : Array
    {
        return Properties::$items ?: [];
    }

    /**
     * Select item
     * 
     * @param mixed $code
     * 
     * @return mixed
     */
    public function item($code)
    {
        if( empty(Properties::$items) )
        {
            return false;
        }

        foreach( Properties::$items as $row )
        {
            if( ! is_array($code) )
            {
                $key = array_search($code, $row);
            }
            else
            {
                if( isset($row[key($code)]) && $row[key($code)] == current($code) )
                {
                    $key = $row;
                }
            }

            if( ! empty($key) )
            {
                return (object) $row;
            }
        }

        return false; // @codeCoverageIgnore
    }
}
