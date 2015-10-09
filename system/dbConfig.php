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

/*
 * --------------------------------------------------------------------
 * DATABASE DRIVERS
 * --------------------------------------------------------------------
 * 
 * Defult Database settings to be used.
 * 
 * Include any number of database connection and change DB_ID to use it.
 * 
 */

define('DB_ID', 0);

class DBC {

    var $config = array(
        0 => array(
            'driver' => 'PDO',
            'host' => '',
            'user' => '',
            'password' => '',
            'database' => ''),
        1 => array(
            'driver' => 'OOP',
            'host' => '',
            'user' => '',
            'password' => '',
            'database' => ''),
        2 => array(
            'driver' => 'FUNC',
            'host' => '',
            'user' => '',
            'password' => '',
            'database' => '')
    );
    var $db = null;

    function __construct() {
        switch ($this->config[DB_ID]['driver']) {
            case 'PDO':
                $this->db = new PDO("mysql:host=" . $this->config[DB_ID]['host'] . ";dbname=" . $this->config[DB_ID]['database'], $this->config[DB_ID]['user'], $this->config[DB_ID]['password']);
                break;
            case 'OOP':
                $this->db = new mysqli($this->config[DB_ID]['host'], $this->config[DB_ID]['user'], $this->config[DB_ID]['password'], $this->config[DB_ID]['database']);
                break;
            case 'FUNC':
                $this->db = mysqli_connect($this->config[DB_ID]['host'], $this->config[DB_ID]['user'], $this->config[DB_ID]['password'], $this->config[DB_ID]['database']);
                break;
        }
    }

    function getConnection() {
        return $this->db;
    }

}
