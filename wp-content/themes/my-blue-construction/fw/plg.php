<?php
	
class myPlg {
	public function __construct( ) {
	}
};

class myPlgs {
	public $plgs = array( );
	
	/// constructor
	function __construct( ) 
	{
		$this->init( );
	}
	
	/// destructor
	function __destructor( ) 
	{
	}
	
	/// load Plugins
	function init( ) {
		$dir = dirname( __FILE__ ) . '/plg/';
		
		$handle = opendir( $dir );
		while( false !== ( $file = readdir( $handle ) ) ) {
			if( $file[ 0 ] != '.' && 
				is_dir( $dir . $file ) &&
				is_file( $dir . $file . '/' . $file . '.php' ) )
			{
				$pFile = $dir . $file . '/' . $file . '.php';
				include( $pFile );
				
				//$this->plgs[ $file ] = new $file;
			}
		}
		closedir( $handle );
		
		//echo "<pre>" . print_r( $this->plgs, 1 ) . "</pre>";
	}
};

/// ////////////////////////////////////////////////////////////////////////////	
	
global $my_plugins;
$my_plugins = new myPlgs( );	

/// ////////////////////////////////////////////////////////////////////////////
	
	
?>