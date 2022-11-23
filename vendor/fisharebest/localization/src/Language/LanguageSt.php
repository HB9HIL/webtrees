<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryLs;

/**
 * Class LanguageSt - Representation of the Sotho language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSt extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'st';
    }

    public function defaultTerritory()
    {
        return new TerritoryLs();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
