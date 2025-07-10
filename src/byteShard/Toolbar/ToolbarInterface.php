<?php

namespace byteShard\Toolbar;


use byteShard\Internal\Struct\UiComponentInterface;

interface ToolbarInterface
{
    public function addToolbarObject(ToolbarObjectInterface ...$toolbarObjects): self;

    /**
     * @return array<string, string | array<mixed>>
     */
    public function getContents(): array;

    public function getComponent(): ?UiComponentInterface;
}