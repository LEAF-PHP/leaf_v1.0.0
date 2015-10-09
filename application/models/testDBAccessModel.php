<?php

/*
 * LEAF (Lightweight Easy Application Framework)
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2015 - 2016, Amitofile Codes.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 *  @package   Leaf
 *  @copyright Copyright (c) 2015 - 2016, Amitofile Codes
 *  @link  http://amitofile.com/leaf
 *  @since	Version 1.0.0
 */

/**
 * Description of testDBAccessModel
 *
 * Page is created for understanding only.
 * 
 * @author Amito
 */
require_once SYS_PATH . 'dbConfig.php';

class TestDBAccessModel {

    var $db = null;

    function __construct() {
        $dbc = new DBC();
        $this->db = $dbc->getConnection();
        $this->db->exec("SET CHARACTER SET utf8");
    }
    
    function select_all_rows() {
        try {
            $sql = "SELECT * FROM `my_table`";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll();
            return $rows;
        } catch (PDOException $e) {
            return FALSE;
        }
    }

}
