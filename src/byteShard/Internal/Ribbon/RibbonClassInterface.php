<?php

namespace byteShard\Internal\Ribbon;

use byteShard\Enum\Access;
use byteShard\Internal\Struct\UiComponentInterface;

interface RibbonClassInterface
{
    public function addRibbonObject(RibbonObjectInterface ...$ribbonObjects): self;

    public function getComponent(): ?UiComponentInterface;

    public function setAccessType(int|Access $accessType): self;
}