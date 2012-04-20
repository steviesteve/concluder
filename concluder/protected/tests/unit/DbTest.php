<?php
class DbTest extends CTestCase
{
	public $fixtures=array
	(
	'location'=>'Location',
	);

	public function testConnection()
	{
		$this->assertNotEquals(NULL, Yii::app()->db);
	}
}
