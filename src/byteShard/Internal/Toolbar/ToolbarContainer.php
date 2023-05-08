<?php
/**
 * byteShard
 *
 * @category   byteShard Framework
 * @package    byteShard
 * @copyright  Copyright (c) 2009 - 2021 Bespin Studios GmbH - All Rights Reserved
 * @license    Unauthorized copying of this file, via any medium is strictly prohibited. Proprietary and confidential
 * @author     Lars Hennig <lars@bespin-studios.com>, April 2021
 * @version    1.1
 * @php        7.4
 */

namespace byteShard\Internal\Toolbar;

interface ToolbarContainer
{
    public function getAccessType(): int;
}
