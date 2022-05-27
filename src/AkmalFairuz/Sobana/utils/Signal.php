<?php

declare(strict_types=1);

namespace AkmalFairuz\Sobana\utils;

interface Signal{

    public const WRITE = 0;
    public const READ = 1;
    public const CLOSE = 2;
    public const OPEN = 3;
}