<?php

namespace byteShard\Internal\Ribbon;

use byteShard\Enum\Access;

interface RibbonObjectInterface
{
    public function setParentAccessType(int|Access $accessType): self;

    public function setBaseLocale(string $baseLocale): void;

    public function getObjectName(): string;
    /**
     * @return array<string, string|int>
     */
    public function getContents(): array;
}