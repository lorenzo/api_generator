<?php
/* SVN FILE: $Id$ */
/**
 * Api Doc Helper Test
 *
 * 
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2006-2008, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright       Copyright 2006-2008, Cake Software Foundation, Inc.
 * @link            http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package         cake
 * @subpackage      cake.cake.libs.
 * @since           CakePHP v 1.2.0.4487
 * @version         
 * @modifiedby      
 * @lastmodified    
 * @license         http://www.opensource.org/licenses/mit-license.php The MIT License
 */
App::import('Helper', array('ApiGenerator.ApiDoc', 'Html'));

/**
* ApiDocHelper test case
*/
class ApiDocHelperTestCase extends CakeTestCase {
/**
 * startTest
 *
 * @return void
 **/
	function startTest() {
		$this->ApiDoc = new ApiDocHelper();
		$this->ApiDoc->Html = new HtmlHelper();
		Configure::write('ApiGenerator.basePath', '/cake/tests');
	}
/**
 * test inBasePath
 *
 * @return void
 **/
	function testInBasePath() {
		$this->assertFalse($this->ApiDoc->inBasePath('/foo/bar/path'));
		$this->assertTrue($this->ApiDoc->inBasePath('/cake/tests/my/path'));
	}
/**
 * undocumented function
 *
 * @return void
 **/
	function testTrimFileName() {
		$result = $this->ApiDoc->trimFileName('/cake/tests/my/path');
		$this->assertEqual($result, 'my/path');
	}
/**
 * endTest
 *
 * @return void
 **/
	function endTest() {
		unset($this->ApiDoc);
	}
}
