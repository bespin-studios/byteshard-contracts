<?php

namespace byteShard\Grid;

use byteShard\Internal\Struct\ClientDataInterface;

interface GridInterface
{
    /**
     * @return array<mixed>
     */
    public function newRunClientGridUpdate(ClientDataInterface $clientData): array;
}