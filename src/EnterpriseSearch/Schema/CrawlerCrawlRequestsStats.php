<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   https://opensource.org/licenses/MIT MIT License
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the MIT License.
 * See the LICENSE file in the project root for more information.
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class CrawlerCrawlRequestsStats
{
	public int $pending;
	public int $active;
	public int $successful;
	public int $failed;


	public function __construct(int $pending, int $active, int $successful, int $failed)
	{
		$this->pending = $pending;
		$this->active = $active;
		$this->successful = $successful;
		$this->failed = $failed;
	}
}
