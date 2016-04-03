<?php

return [
    'plugin' => [
        'name' => 'Redirect',
        'description' => 'Easily manage redirects',
    ],
    'permission' => [
        'access_redirects' => [
            'label' => 'Redirects',
            'tab' => 'Redirects',
        ],
    ],
    'navigation' => [
        'menu_label' => 'Redirects',
        'menu_description' => 'Manage redirects',
    ],
    'redirect' => [
        'redirect' => 'Redirect',
        'create_redirect' => 'Create Redirect',
        'edit_redirect' => 'Edit Redirect',
        'from_url' => 'Source path',
        'from_url_placeholder' => '/source/path',
        'from_url_comment' => 'The source path to match.',
        'to_url' => 'Target path or URL',
        'to_url_placeholder' => '/target/path or http://target.url',
        'to_url_comment' => 'The target path or URL to redirect to.',
        'from_date' => 'Available from',
        'from_date_comment' => 'The date on which this redirect will become active. Can be omitted.',
        'to_date' => 'Available until',
        'to_date_comment' => 'The date until this redirect is active. Can be omitted.',
        'match_type' => 'Match type',
        'status_code' => 'Redirect type',
        'sort_order' => 'Sort order',
        'requirements_comment' => 'Provide requirements for each placeholder.',
        'placeholder' => 'Placeholder',
        'placeholder_comment' => 'The placeholder name (including curly braces) provided in the \'Source path\' field. '
            . 'E.g. {category} or {id}',
        'requirement' => 'Requirement',
        'requirement_comment' => 'Provide the requirement in regular expression syntax. E.g. [0-9]+ or [a-zA-Z]+.',
        'requirements_prompt' => 'Add new requirement',
        'replacement' => 'Replacement',
        'replacement_comment' => 'Provide an optional replacement value for this placeholder. '
            . 'The matched placeholder will be replaced with this value in the target URL.',
        'exact' => 'Exact',
        'placeholders' => 'Placeholders',
        'permanent' => '301 - Permanent',
        'temporary' => '302 - Temporary',
        'enabled' => 'Enabled',
        'enable_selected' => 'Enable selected',
        'disable_selected' => 'Disable selected',
        'enabled_comment' => 'Flick this switch to enable this redirect.',
        'publish' => 'Publish',
        'publish_success' => ':number redirects are successfully published',
        'publish_hint' => 'To activate your redirects make sure they are enabled and then hit \'Publish redirects\'.',
        'publish_order_hint' => 'After re-ordering your redirects need to be published again.',
        'publish_confirm' => 'Are you sure you want to publish all changes?',
        'published' => 'Published',
        'priority' => 'Priority',
        'hits' => 'Hits',
        'reorder_redirects' => 'Reorder',
        'new_redirect' => 'Add',
        'return_to_redirects' => 'Return to redirects list',
        'hide_disabled' => 'Hide Disabled',
        'hide_published' => 'Hide Published',
        'delete_confirm' => 'Are you sure?',
        'manage_redirects' => 'Manage Redirects',
        'test_comment' => 'Please test your redirect before publishing the redirect.',
        'input_path' => 'Input path',
        'input_path_comment' => 'The input path to test. E.g. /old-blog/category/123',
        'input_path_placeholder' => '/input/path',
        'test_date' => 'Test date',
        'test_date_comment' => 'If you scheduled this redirect, you can test this redirect on a certain date.',
        'testing' => 'Testing...',
        'run_test' => 'Run Test',
        'no_match_label' => 'Sorry, no match!',
        'no_match' => 'No match found!',
        'match_success_label' => 'We have a match!',
        'created_at' => 'Created at',
        'modified_at' => 'Modified at',
        'export_redirects' => 'Export',
        'import_redirects' => 'Import',
        'tab_general' => 'General',
        'tab_requirements' => 'Requirements',
        'tab_test' => 'Test',
        'tab_scheduling' => 'Scheduling',
        'scheduling_comment' => 'Here you can provide a period on which this redirect will be available. '
            . 'All sorts of date combinations are possible.',
        'status' => 'Status',
        'status_published' => 'Published',
        'status_unpublished' => 'Unpublished',
        'status_changed' => 'Changed',
        'delete' => 'Delete',
        'enable' => 'Enable',
        'disable' => 'Disable',
        'predefined_periods' => 'Predefined periods',
        '1week' => '1 week',
        '2weeks' => '2 weeks',
        '1month' => '1 month',
        '2months' => '2 months',
        'clear_period' => 'Clear Period',
    ],
];
