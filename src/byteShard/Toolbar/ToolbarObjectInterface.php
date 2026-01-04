<?php

namespace byteShard\Toolbar;

use byteShard\Enum\Access;

interface ToolbarObjectInterface
{
    public function setParentAccessType(int|Access $accessType): static;

    public function setBaseLocale(string $baseLocale): void;

    public function hasEvents(): bool;

    public function getToolbarObjectName(): string;

    public function setEventName(string $eventName): void;

    /**
     * @return array<string, string|int>
     */
    public function getContents(): array;

}