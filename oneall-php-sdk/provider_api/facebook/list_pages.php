<?php
/**
 * Copyright 2015 OneAll, LLC.
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
include __DIR__ . '/../../../bootstrap.php';

// Make Request
$api        = new \Oneall\Api\Apis\Provider\Facebook($client);
$pagination = new \Oneall\Api\Pagination(2, 5, 'desc');
$response   = $api->getPages($pagination);

displayResponse($response);
