<?php

namespace byteShard\Toolbar;


interface ToolbarInterface
{
    public function addToolbarObject(ToolbarObjectInterface ...$toolbarObjects): self;

    /**
     * @return array<string, string | array<mixed>>
     */
    public function getContents(): array;

}