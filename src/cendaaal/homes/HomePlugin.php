<?php

declare(strict_types=1);

namespace cendaaal\homes;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

final class HomePlugin extends PluginBase {
    use SingletonTrait {
        setInstance as private;
        reset as private;
    }

    protected function onLoad(): void {
        self::setInstance($this);
    }

}