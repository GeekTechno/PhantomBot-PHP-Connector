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

require_once 'PhantomBotConnector.class.php';

$connector = new PhantomBotConnector('0.0.0.0', 'oauth:XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');

echo '<pre>' . print_r($connector->get('points'), true) . '</pre>';