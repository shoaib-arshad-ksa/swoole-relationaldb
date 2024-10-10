<?php
/*
 *  This file is a part of small-swoole-db
 *  Copyright 2024 - Sébastien Kus
 *  Under GNU GPL V3 licence
 */

namespace Small\SwooleDb\Core\Enum;

use Openswoole\Table;

if (!\class_exists('\OpenSwoole\Table')) {
    \class_alias('\Swoole\Table', '\OpenSwoole\Table');
}

enum ColumnType: int
{

    case int = Table::TYPE_INT;
    case float = Table::TYPE_FLOAT;
    case string = Table::TYPE_STRING;

}