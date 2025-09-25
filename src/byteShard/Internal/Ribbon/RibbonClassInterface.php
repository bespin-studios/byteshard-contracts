<?php

namespace byteShard\Internal\Ribbon;

use byteShard\Internal\Struct\UiComponentInterface;

interface RibbonClassInterface
{
    public function addRibbonObject(RibbonObjectInterface ...$ribbonObjects): self;

    /**
     * @return array<string, string | array<mixed>>
     */
    public function getContents(): array;

    public function getComponent(): ?UiComponentInterface;
}