<?php

declare (strict_types=1);
namespace RectorPrefix20211201\Symplify\VendorPatches\Console;

use RectorPrefix20211201\Symfony\Component\Console\Application;
use RectorPrefix20211201\Symfony\Component\Console\Command\Command;
use RectorPrefix20211201\Symplify\PackageBuilder\Console\Command\CommandNaming;
final class VendorPatchesConsoleApplication extends \RectorPrefix20211201\Symfony\Component\Console\Application
{
    /**
     * @param Command[] $commands
     */
    public function __construct(\RectorPrefix20211201\Symplify\PackageBuilder\Console\Command\CommandNaming $commandNaming, array $commands)
    {
        foreach ($commands as $command) {
            $commandName = $commandNaming->resolveFromCommand($command);
            $command->setName($commandName);
            $this->add($command);
        }
        parent::__construct('Vendor Patches');
    }
}
