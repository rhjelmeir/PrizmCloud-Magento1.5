<?php
	/* Accusoft PrizmCloud installation script
	*  
	*  @author Accusoft
	*/
	
	/*
	*  @var $installer Mage_Core_Model_Resources_Setup
	*/
	$installer = $this;
	
	$table = $installer->getConnection()
		->newTable($installer->getTable('prizmclouddocsviewer'))
		->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
			'unsigned' => true,
			'identity' => true,
			'nullable' => false,
			'primary'  => true,
			), 'Entity id')
		->addColumn('pkey', Varien_Db_Ddl_Table::TYPE_VARCHAR, 100, array(), 'Key')
		->addColumn('ptype', Varien_Db_Ddl_Table::TYPE_VARCHAR, 20, array(), 'Type')
		->addColumn('doc_url', Varien_Db_Ddl_Table::TYPE_TVARCHAR, 255, array(), 'Key')
		->addColumn('width', Varien_Db_Ddl_Table::INTEGER, 5, array(), 'Key')
		->addColumn('height', Varien_Db_Ddl_Table::TYPE_INTEGER, 5, array(), 'Key')
		->addColumn('print_button', Varien_Db_Ddl_Table::TYPE_BOOLEAN, 1, array(), 'Key')
		->addColumn('toolbar_color', Varien_Db_Ddl_Table::TYPE_VARCHAR, 7, array(), 'Key');
		
		$installer->getConnection()->createTable($table);
