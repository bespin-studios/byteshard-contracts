<?php

namespace byteShard\Internal\Ribbon;

use byteShard\Enum\Access;
use byteShard\Enum\Event;
use SimpleXMLElement;

interface RibbonObjectInterface
{
    public function setParentAccessType(int|Access $accessType): static;

    public function getAccessType(): int|Access;

    public function setBaseLocale(string $baseLocale): void;

    public function getObjectName(): string;

    /**
     * @return array<string, string|int>
     */
    public function getContents(): array;

    /**
     * @return array<RibbonObjectInterface>
     */
    public function getNestedItems(): array;

    public function generateEncryptedId(string $nonce): void;

    /**
     * @return array<Event>
     */
    public function getEvents(): array;

    public function addObjectToXml(?SimpleXMLElement $parent): void;
}