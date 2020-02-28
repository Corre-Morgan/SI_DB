<?php
class Database
{

    /**
     * Instance de la classe PDO
     *
     * @var PDO
     * @access private
     */
    private $PDO_instance = null;

    /**
     * Instance de la classe Database
     *
     * @var Database
     * @access private
     * @static
     */
    private static $instance = null;

    /**
     * Constante: hôte de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_HOST = 'localhost';

    /**
     * Constante: nom de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_DTB = 'mysql';

    /**
     * Constructeur
     *
     * @param void
     * @return void
     * @see PDO::__construct()
     * @access private
     */
    private function __construct($username, $passwd)
    {
        try{
            $this->PDO_instance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,$username, $passwd);
        }
        catch (PDOException $e){
            $e->getMessage();
        }
    }

    /**
     * Crée et retourne l'objet SPDO
     *
     * @access public
     * @static
     * @param void
     * @return Database $instance
     */
    public static function get_instance($username = "", $passwd = "")
    {
        if(is_null(self::$instance))
        {
            self::$instance = new Database($username, $passwd);
        }
        if (is_null(self::$instance->PDO_instance)){return null;}
        return self::$instance;
    }

    /**
     * Exécute une requête SQL avec PDO
     *
     * @param string $query La requête SQL
     * @return PDOStatement Retourne l'objet PDOStatement
     */
    public function query($query)
    {
        return $this->PDO_instance->query($query);
    }
}