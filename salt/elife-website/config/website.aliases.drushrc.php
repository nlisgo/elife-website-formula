<?php

$aliases['local'] = [
  'root' => '/srv/website/web',
  'uri' => 'localhost:80',
];

$aliases['platform'] = [
  'root' => '{{ pillar.elife_website.platform_env.root }}',
  'uri' => '{{ pillar.elife_website.platform_env.uri }}',
  'remote-host' => '{{ pillar.elife_website.platform_env.host }}',
  'remote-user' => '{{ pillar.elife_website.platform_env.user }}',
  'command-specific' => [
    'sql-dump' => [
      'structure-tables-list' => implode(',', [
        'batch',
        'cache',
        'cache_admin_menu',
        'cache_block',
        'cache_bootstrap',
        'cache_display_cache',
        'cache_elife_article_glencoe',
        'cache_elife_article_pmid',
        'cache_elife_resources',
        'cache_entity_comment',
        'cache_entity_field_collection_item',
        'cache_entity_file',
        'cache_entity_node',
        'cache_entity_taxonomy_term',
        'cache_entity_taxonomy_vocabulary',
        'cache_entity_user',
        'cache_features',
        'cache_field',
        'cache_filter',
        'cache_form',
        'cache_image',
        'cache_libraries',
        'cache_menu',
        'cache_metatag',
        'cache_page',
        'cache_panels',
        'cache_path',
        'cache_rules',
        'cache_search_api_solr',
        'cache_token',
        'cache_update',
        'cache_views',
        'cache_views_data',
        'ctools_css_cache',
        'ctools_object_cache',
        'elife_citation',
        'elife_markup',
        'elysia_cron',
        'flood',
        'history',
        'registry',
        'registry_file',
        'semaphore',
        'sessions',
        'xmlsitemap',
        'xmlsitemap_sitemap',
      ]),
    ],
  ],
];