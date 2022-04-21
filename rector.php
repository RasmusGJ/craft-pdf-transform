<?php
declare(strict_types = 1);

use craft\rector\SetList as CraftSetList;
use Rector\Core\Configuration\Option;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function(ContainerConfigurator $containerConfigurator): void {
    // Skip the integrations folder
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SKIP, [
        __DIR__ . '/src/integrations',
    ]);

    // Import the Craft 4 upgrade rule set
    $containerConfigurator->import(CraftSetList::CRAFT_CMS_40);
};