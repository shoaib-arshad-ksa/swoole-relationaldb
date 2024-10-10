<?php
/*
 *  This file is a part of small-swoole-db
 *  Copyright 2024 - Sébastien Kus
 *  Under GNU GPL V3 licence
 */

namespace Small\SwooleDb\Registry;

use Small\SwooleDb\Exception\NotFoundException;
use Small\SwooleDb\Registry\Enum\ParamType;
use Small\SwooleDb\Registry\Trait\RegistryTrait;

final class ParamRegistry
{

    use RegistryTrait;

    /**
     * @var string[]
     */
    private array $params;

    private function __construct()
    {
        $this->resetDefaults();
    }

    public function resetDefaults(): self
    {
        $this->params = [
            ParamType::varLibDir->name => '/var/lib/small-swoole-db',
            ParamType::dataDirName->name => 'data',
        ];

        return $this;
    }

    /**
     * Get parameter value
     * @param ParamType $param
     * @return string
     * @throws NotFoundException
     */
    public function get(ParamType $param): string
    {
        return $this->params[$param->name];
    }

    /**
     * Set parameter value
     * @param ParamType $param
     * @param string $value
     * @return $this
     * @throws NotFoundException
     */
    public function set(ParamType $param, string $value): self
    {
        $this->params[$param->name] = $value;

        return $this;
    }

}