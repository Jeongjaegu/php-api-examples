<?php
/**
 * Copyright 2011 - Present OneAll, LLC.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 *
 */

// HTTP Handler and Configuration
include '../../../bootstrap.php';

// Read the Steam games on an identity
// https://docs.oneall.com/api/resources/identities/steam/list-games/

// Get the Steam games of this identity
$identity_token = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';

// Make Request
$api      = new \Oneall\Api\Apis\Provider\Steam($client);
$response = $api->getGames($identity_token);

displayResponse($response);