<?php

namespace Jramos\Jramosmodule\Lumen;

use Jramos\Jramosmodule\FileRepository;

class LumenFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
