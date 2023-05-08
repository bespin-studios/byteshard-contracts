<?php
/**
 * byteShard
 *
 * @category   byteShard Framework
 * @package    byteShard
 * @copyright  Copyright (c) 2009 - 2015 Bespin Studios GmbH - All Rights Reserved
 * @license    Unauthorized copying of this file, via any medium is strictly prohibited. Proprietary and confidential
 * @author     Lars Hennig <lars@bespin-studios.com>, January 2015
 * @version    1.0
 */

namespace byteShard\Internal;

interface CredentialsInterface
{
    public function getUsername(): string;

    public function getPassword(): string;

    public function getDomain(): string;

    public function getNewPassword(): string;

    public function getNewPasswordRepetition(): string;
}
