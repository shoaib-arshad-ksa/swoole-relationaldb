<?php
/*
 *  This file is a part of small-swoole-db
 *  Copyright 2024 - Sébastien Kus
 *  Under GNU GPL V3 licence
 */

namespace Small\SwooleDb\Core\Index\Enum;

enum IndexNodeFrom
{

    case root;
    case left;
    case right;

}