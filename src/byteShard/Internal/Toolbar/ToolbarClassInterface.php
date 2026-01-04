<?php

namespace byteShard\Internal\Toolbar;

use byteShard\Enum\Access;
use byteShard\Internal\Struct\UiComponentInterface;
use byteShard\Toolbar\ToolbarObjectInterface;

interface ToolbarClassInterface
{
    public function addToolbarObject(ToolbarObjectInterface ...$toolbarObjects): static;

    /**
     * @return array<string, string | array<mixed>>
     */
    public function getContents(): array;

    public function getComponent(): ?UiComponentInterface;

    public function setAccessType(int|Access $accessType): static;
}