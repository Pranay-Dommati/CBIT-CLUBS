<?php
/**
 * @license MIT
 *
 * Modified by kadencewp on 29-May-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace KadenceWP\KadenceBlocks\Composer\Installers;

class VanillaInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array(
        'plugin'    => 'plugins/{$name}/',
        'theme'     => 'themes/{$name}/',
    );
}
