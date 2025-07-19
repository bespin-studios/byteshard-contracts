<?php

namespace byteShard\Form;

use SimpleXMLElement;

interface FormSettingsInterface
{
    public function getInputWidth(): string;

    /**
     * @return array<string, string|int>
     */
    public function getSettings(): array;

    public function getXMLElement(?SimpleXMLElement $xmlElement, bool $inputWidth = true): void;
}