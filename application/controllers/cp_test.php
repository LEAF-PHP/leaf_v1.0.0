<?php

/*
 * LEAF (Lightweight Easy Application Framework)
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2015 - 2016 Amitofile Codes.
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
class test {

    function index_get() {
        include_once VIEW_PATH . '_header.php';
        include_once VIEW_PATH . 'welcome.php';
        include_once VIEW_PATH . '_footer.php';
    }

    function show_rows_get() {
        require_once MODEL_PATH . 'testDBAccessModel.php';
        $db_access = new TestDBAccessModel();

        /*
         * http://localhost/LEAF/test/show_rows?iformat=json
         * 
         */
        
        echo json_encode($db_access->select_all_rows());
        
        // or Uncomment below code.
        
        /*
         * http://localhost/LEAF/test/show_rows
         * 
         */
        
        //require_once VIEW_PATH . 'testRowView.php';
        //$row_view = new TestRowView();

        //include_once VIEW_PATH . '_header.php';
        //$row_view->_body($db_access->select_all_rows());
        //include_once VIEW_PATH . '_footer.php';
    }

}
