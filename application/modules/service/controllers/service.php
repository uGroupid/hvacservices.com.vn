<?php
class Service extends MY_Controller{
	function __construct(){
		parent::__construct();	
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));		
	}
	public function repair_db(){
		// Start Function Cronjob Auto repair_table and Backup Database 6h/lần //
		$this->load->dbutil();
		$tables = $this->db->list_tables();
		foreach ($tables as $table)
		{
		   $this->dbutil->repair_table($table);
		}
		$backup =& $this->dbutil->backup();
		$this->load->helper('file');
		$namebackup = "QuatCongNghiep".time();
		write_file('/var/www/clients/client158/web227/web/backup/'.$namebackup.'.gz', $backup); 
		// End Function Cronjob Auto repair_table and Backup Database//
	}
/********************************************************************************/
/*****************END Class User*************************************************/
}
?>