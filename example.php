<?php

/**
 * Connect your PHP code to your copy of PhantomBot
 * Copyright (C) 2016 Juraji
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://www.gnu.org/licenses/.
 */

/**
 * NOTICE: The tablenames and files used in this example may not exist in your situation!
 */

require_once 'PhantomBotConnector.class.php';

$connector = new PhantomBotConnector('0.0.0.0', 'oauth:XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');

/**
 * Get all viewer points
 *
 * Possible response:
 * Array
 * (
 *    [0] => Array
 *        (
 *            [user1] => 0
 *            [user2] => 0
 *            ...
 *        )
 *    [1] => Array
 *        (
 *            [url] => HTTP://0.0.0.0/inistore/points
 *            [content_type] =>
 *            [http_code] => 200
 *            [header_size] => 122
 *            [request_size] => 172
 *            [filetime] => -1
 *            [ssl_verify_result] => 0
 *            [redirect_count] => 0
 *            [total_time] => 0.000
 *            [namelookup_time] => 0
 *            [connect_time] => 0
 *            [pretransfer_time] => 0
 *            [size_upload] => 0
 *            [size_download] => 0
 *            [speed_download] => 0
 *            [speed_upload] => 0
 *            [download_content_length] => 0
 *            [upload_content_length] => -1
 *            [starttransfer_time] => 0.000
 *            [redirect_time] => 0
 *            [redirect_url] =>
 *            [primary_ip] => 0.0.0.0
 *            [certinfo] => Array()
 *            [primary_port] => 25000
 *            [local_ip] => 0.0.0.0
 *            [local_port] => 0
 *        )
 *    [2] => 0
 *    [3] => ""
 * )
 */
echo '<pre>' . print_r($connector->getTable('points'), true) . '</pre>';

/**
 * Get a file from the addons folder
 *
 * Possible response:
 * Array
 * (
 *    [0] => Array
 *        (
 *            [0] => Quintino & Yves V - Unbroken (Official Music Video)
 *        )
 *    [1] => Array
 *        (
 *            [url] => HTTP://0.0.0.0/addons/youtubePlayer/currentSong.txt
 *            [content_type] =>
 *            [http_code] => 200
 *            [header_size] => 122
 *            [request_size] => 172
 *            [filetime] => -1
 *            [ssl_verify_result] => 0
 *            [redirect_count] => 0
 *            [total_time] => 0.000
 *            [namelookup_time] => 0
 *            [connect_time] => 0
 *            [pretransfer_time] => 0
 *            [size_upload] => 0
 *            [size_download] => 0
 *            [speed_download] => 0
 *            [speed_upload] => 0
 *            [download_content_length] => 0
 *            [upload_content_length] => -1
 *            [starttransfer_time] => 0.000
 *            [redirect_time] => 0
 *            [redirect_url] =>
 *            [primary_ip] => 0.0.0.0
 *            [certinfo] => Array()
 *            [primary_port] => 25000
 *            [local_ip] => 0.0.0.0
 *            [local_port] => 0
 *        )
 *    [2] => 0
 *    [3] => ""
 * )
 */

echo '<pre>' . print_r($connector->getAddonFile('/youtubePlayer/currentSong.txt'), true) . '</pre>';