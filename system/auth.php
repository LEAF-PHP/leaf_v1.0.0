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
 * ---------------------------------------------------------------
 * API KEY AUTHENTICATION
 * ---------------------------------------------------------------
 * 
 * This module will check for valid key provided with each web 
 * service call.
 * 
 * This is basic authentication process and can be replaced by complex 
 * one. 
 *
 */

if (API_KEY !== '') {
    if (REQUEST === 'POST') {
        if (!is_null(filter_input(INPUT_POST, 'ikey')) && ctype_alnum(filter_input(INPUT_POST, 'ikey'))) {
            if (strcmp(API_KEY, filter_input(INPUT_POST, 'ikey')) !== 0) {
                header('HTTP/1.1 401 Unauthorized.', TRUE, 401);
                echo 'You are not authorised to access this page.';
                exit(1); // EXIT_ERROR 
            }
        } else {
            header('HTTP/1.1 401 Unauthorized.', TRUE, 401);
            echo 'You are not authorised to access this page.';
            exit(1); // EXIT_ERROR 
        }
    } else {
        if (!is_null(filter_input(INPUT_GET, 'ikey')) && ctype_alnum(filter_input(INPUT_GET, 'ikey'))) {
            if (strcmp(API_KEY, filter_input(INPUT_GET, 'ikey')) !== 0) {
                header('HTTP/1.1 401 Unauthorized.', TRUE, 401);
                echo 'You are not authorised to access this page.';
                exit(1); // EXIT_ERROR 
            }
        } else {
            header('HTTP/1.1 401 Unauthorized.', TRUE, 401);
            echo 'You are not authorised to access this page.';
            exit(1); // EXIT_ERROR 
        }
    }
}