<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Form;

use byteShard\Internal\ClientData\ProcessedClientDataInterface;
use stdClass;

interface FormInterface
{
    /**
     * @param array<stdClass> $properties
     * @return string
     */
    public static function getObjectProperties(array $properties): string;

    public function getProcessedClientData(string $control, string $value): ProcessedClientDataInterface;

    public function addFormSettings(FormSettingsInterface $formSettings): self;

}