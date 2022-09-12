<?php

namespace asappi\phpmvc;

use asappi\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
