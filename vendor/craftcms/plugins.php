<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'clubstudioltd/craft-asset-rev' => 
  array (
    'class' => 'club\\assetrev\\AssetRev',
    'basePath' => $vendorDir . '/clubstudioltd/craft-asset-rev/src',
    'handle' => 'assetrev',
    'aliases' => 
    array (
      '@club/assetrev' => $vendorDir . '/clubstudioltd/craft-asset-rev/src',
    ),
    'name' => 'Asset Rev',
    'version' => '7.0.0',
    'description' => 'A plugin to aid cache-busting in Craft 4',
    'developer' => 'Club Studio Ltd',
    'developerUrl' => 'https://clubstudio.co.uk',
    'documentationUrl' => 'https://github.com/clubstudioltd/craft-asset-rev',
    'changelogUrl' => 'https://github.com/clubstudioltd/craft-asset-rev/blob/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/clubstudioltd/craft-asset-rev/archive/v6.zip',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '3.0.3',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'putyourlightson/craft-blitz-recommendations' => 
  array (
    'class' => 'putyourlightson\\blitzrecommendations\\BlitzRecommendations',
    'basePath' => $vendorDir . '/putyourlightson/craft-blitz-recommendations/src',
    'handle' => 'blitz-recommendations',
    'aliases' => 
    array (
      '@putyourlightson/blitzrecommendations' => $vendorDir . '/putyourlightson/craft-blitz-recommendations/src',
    ),
    'name' => 'Blitz Recommendations',
    'version' => '2.1.1',
    'description' => 'Adds a utility that provides templating performance recommendations.',
    'developer' => 'PutYourLightsOn',
    'developerUrl' => 'https://putyourlightson.com/',
    'documentationUrl' => 'https://putyourlightson.com/plugins/blitz-recommendations',
    'changelogUrl' => 'https://raw.githubusercontent.com/putyourlightson/craft-blitz-recommendations/v2/CHANGELOG.md',
  ),
  'craftcms/feed-me' => 
  array (
    'class' => 'craft\\feedme\\Plugin',
    'basePath' => $vendorDir . '/craftcms/feed-me/src',
    'handle' => 'feed-me',
    'aliases' => 
    array (
      '@craft/feedme' => $vendorDir . '/craftcms/feed-me/src',
    ),
    'name' => 'Feed Me',
    'version' => '5.0.4',
    'description' => 'Import content from XML, RSS, CSV or JSON feeds into entries, categories, Craft Commerce products, and more.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://docs.craftcms.com/feed-me/v4/',
  ),
  'hybridinteractive/craft-position-fieldtype' => 
  array (
    'class' => 'rias\\positionfieldtype\\PositionFieldtype',
    'basePath' => $vendorDir . '/hybridinteractive/craft-position-fieldtype/src',
    'handle' => 'position-fieldtype',
    'aliases' => 
    array (
      '@rias/positionfieldtype' => $vendorDir . '/hybridinteractive/craft-position-fieldtype/src',
    ),
    'name' => 'Position Fieldtype',
    'version' => '4.0.0-beta.3',
    'schemaVersion' => '1.0.0',
    'description' => 'Brings back the Position fieldtype from Craft 2',
    'developer' => 'Hybrid Interactive',
    'developerUrl' => 'https://hybridinteractive.io',
    'documentationUrl' => 'https://github.com/hybridinteractive/craft-position-fieldtype/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/riasvdv/craft-position-fieldtype/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'nystudio107/craft-templatecomments' => 
  array (
    'class' => 'nystudio107\\templatecomments\\TemplateComments',
    'basePath' => $vendorDir . '/nystudio107/craft-templatecomments/src',
    'handle' => 'templatecomments',
    'aliases' => 
    array (
      '@nystudio107/templatecomments' => $vendorDir . '/nystudio107/craft-templatecomments/src',
    ),
    'name' => 'Template Comments',
    'version' => '4.0.0',
    'description' => 'Adds a HTML comment with performance timings to demarcate `{% block %}`s and each Twig template that is included or extended.',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com/',
    'documentationUrl' => 'https://nystudio107.com/docs/template-comments/',
  ),
  'sebastianlenz/linkfield' => 
  array (
    'class' => 'lenz\\linkfield\\Plugin',
    'basePath' => $vendorDir . '/sebastianlenz/linkfield/src',
    'handle' => 'typedlinkfield',
    'aliases' => 
    array (
      '@lenz/linkfield' => $vendorDir . '/sebastianlenz/linkfield/src',
    ),
    'name' => 'Typed link field',
    'version' => '2.1.5',
    'description' => 'A Craft field type for selecting links',
    'developer' => 'Sebastian Lenz',
    'developerUrl' => 'https://github.com/sebastian-lenz/',
  ),
  'topshelfcraft/environment-label' => 
  array (
    'class' => 'TopShelfCraft\\EnvironmentLabel\\EnvironmentLabel',
    'basePath' => $vendorDir . '/topshelfcraft/environment-label/src',
    'handle' => 'environment-label',
    'aliases' => 
    array (
      '@TopShelfCraft/EnvironmentLabel' => $vendorDir . '/topshelfcraft/environment-label/src',
    ),
    'name' => 'Environment Label',
    'version' => '4.0.2',
    'description' => '...so you don\'t forget where you are.',
    'developer' => 'Top Shelf Craft (Michael Rog)',
    'developerUrl' => 'https://topshelfcraft.com',
    'documentationUrl' => 'https://github.com/TopShelfCraft/Environment-Label',
  ),
  'verbb/super-table' => 
  array (
    'class' => 'verbb\\supertable\\SuperTable',
    'basePath' => $vendorDir . '/verbb/super-table/src',
    'handle' => 'super-table',
    'aliases' => 
    array (
      '@verbb/supertable' => $vendorDir . '/verbb/super-table/src',
    ),
    'name' => 'Super Table',
    'version' => '3.0.0',
    'description' => 'Super-charge your Craft workflow with Super Table. Use it to group fields together or build complex Matrix-in-Matrix solutions.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/super-table',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/super-table/craft-4/CHANGELOG.md',
  ),
);
