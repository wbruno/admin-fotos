<?php/** * class Registry * @author Matt Zandstra - 'Objetos PHP, Padrões e Prática', pg 222 */class Registry{	private static $instance;	private $values = Array();	private function __construct(){}	public static function instance()	{		if( ! isset( self::$instance ) ) { self::$instance = new self(); }		return self::$instance;	}	public function get( $key )	{		if( isset( $this->values[ $key ] ) )			return $this->values[ $key ];		return null;	}	public function set( $key, $value )	{		$this->values[ $key ] = $value;	}}