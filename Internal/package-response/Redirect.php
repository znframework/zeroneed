<?php namespace ZN\Response;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\IS;
use ZN\Request;
use ZN\Response;
use ZN\Singleton;
use ZN\Request\Http;

class Redirect implements RedirectInterface
{
    /**
     * Prefix 
     * 
     * @var string
     */
    protected $fix = 'redirect:';

    /**
     * Redirect
     * 
     * @var array
     */
    protected $redirect =
    [
        'time'   => 0,
        'data'   => []
    ];

    /**
     * Magic Constructor
     *
     * @param string $url  = NULL
     * @param int    $time = 0
     * @param array  $data = NULL
     * @param bool   $exit = true
     */
    public function __construct(String $url = NULL, Int $time = 0, Array $data = NULL, Bool $exit = true)
    {
        if( $url !== NULL )
        {
            $this->location($url, $time, $data, $exit);
        }
    }

    /**
     * Get redirect status
     * 
     * @return int
     */
    public static function status() : Int
    {
        return $_SERVER['REDIRECT_STATUS'] ?? 0;
    }

    /**
     * Get redirect url
     * 
     * @return string
     */
    public static function url() : String
    {
        return $_SERVER['REDIRECT_URL'] ?? false;
    }

    /**
     * Get redirect string query
     * 
     * @return string
     */
    public static function queryString() : String
    {
        return $_SERVER['REDIRECT_QUERY_STRING'] ?? false;
    }

    /**
     * Redirect code
     * 
     * @param int $code
     * 
     * @return Redirect
     */
    public function code(Int $code) : Redirect
    {
        Http::response($code);

        return $this;
    }

    /**
     * Page refresh.
     * 
     * @param string $url  = NULL
     * @param int    $time = 0
     * @param array  $data = NULL
     * @param bool   $exit = false
     */
    public function refresh(String $url = NULL, Int $time = 0, Array $data = NULL, Bool $exit = false)
    {
        $this->location($url, $time, $data, $exit, __FUNCTION__);
    }

    /**
     * Location
     *
     * @param string $url  = NULL
     * @param int    $time = 0
     * @param array  $data = NULL
     * @param bool   $exit = true
     */
    public function location(String $url = NULL, Int $time = 0, Array $data = NULL, Bool $exit = true, $type = 'location')
    {
        return Response::redirect($url, $time, $data, $exit, $type);
    }

    /**
     * Select redirect data
     * 
     * @param string $k
     * @param bool   $isDelete = false
     * 
     * @return false|mixed
     */
    public function selectData(String $k, Bool $isDelete = false)
    {
        if( $data = ($_SESSION[$this->fix . $k] ?? NULL) )
        {
            if( $isDelete === true )
            {
                $this->deleteData($k);
            }

            return $data;
        }
        else
        {
            return false;
        }
    }

    /**
     * Redirect delete data
     * 
     * 5.7.5.2[fixed]
     * 
     * @param mixed $data
     * 
     * @return true
     */
    public function deleteData($data) : Bool
    {
        if( is_array($data) ) foreach( $data as $v )
        {
            unset($_SESSION[$this->fix . $v]);
        }
        else
        {
            unset($_SESSION[$this->fix . $data]);
        }

        return true;
    }

    /**
     * Action URL
     * 
     * @param string $action = NULL
     */
    public function action(String $action = NULL)
    {
        $time = $this->redirect['time'] ?? 0;
        $data = $this->redirect['data'] ?? [];
        $exit = $this->redirect['exit'] ?? true;

        $this->redirect = [];

        if( strstr(get_called_class() , 'Refresh') )
        {
            $exit = false;
            $type = 'refresh';
        }

        $this->location($action, $time, $data, $exit, $type ?? 'location');
    }

    /**
     * Sets redirect exit
     * 
     * @param bool $exit = 0
     * 
     * @return self
     */
    public function exit(Bool $exit = true)
    {
        $this->redirect['exit'] = $exit;

        return $this;
    }

    /**
     * Sets redirect time
     * 
     * @param int $time = 0
     * 
     * @return self
     */
    public function time(Int $time = 0)
    {
        $this->redirect['time'] = $time;

        return $this;
    }

    /**
     * Sets waiting time. same time() method
     * 
     * @param int $time = 0
     * 
     * @return self
     */
    public function wait(Int $time = 0)
    {
        $this->redirect['time'] = $time;

        return $this;
    }

    /**
     * Sets redirect data
     * 
     * @param array $data
     * 
     * @return self
     */
    public function data(Array $data)
    {
        $this->redirect['data'] = $data;

        return $this;
    }

    /**
     * Insert redirect data
     * 
     * @param array $data
     * 
     * @return self
     */
    public function insert(Array $data)
    {
        $this->redirect['data'] = $data;

        return $this;
    }

    /**
     * Select redirect data
     * 
     * @param string $key
     * @param bool   $isDelete = false
     * 
     * @return mixed
     */
    public function select(String $key, Bool $isDelete = false)
    {
        return $this->selectData($key, $isDelete);
    }

    /**
     * Deletes redirect data
     * 
     * @param mixed $key
     * 
     * @return true
     */
    public function delete($key) : Bool
    {
        return $this->deleteData($key);
    }
}
