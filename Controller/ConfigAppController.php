<?php
/**
 * Copyright 2010 - 2012, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2012, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 * ConfigAppController
 *
 * PHP version 5
 *
 * @author   wangshijun <wangshijun2010@gmail.com>
 * @package Plugin
 * @subpackage  Config
 */

App::uses('AppController', 'Controller');

class ConfigAppController extends AppController {

    /**
     * Components
     *
     * @var array
     * @access public
     */
    public $components = array('Security');

    public function beforeRender() {
        parent::beforeRender();
        $this->set('plugin', 'config');
    }

}
