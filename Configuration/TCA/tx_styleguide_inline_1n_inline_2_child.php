<?php

return [
    'ctrl' => [
        'title' => 'Form engine - inline 1:n inline_2 foreign field child',
        'label' => 'input_1',
        'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
    ],

    'columns' => [
        'sys_language_uid' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'Translation parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_styleguide_inline_1n_inline_2_child',
                'foreign_table_where' => 'AND {#tx_styleguide_inline_1n_inline_2_child}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_1n_inline_2_child}.{#sys_language_uid} IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_source' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'Translation source',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0,
                    ],
                ],
                'foreign_table' => 'tx_styleguide_inline_1n_inline_2_child',
                'foreign_table_where' => 'AND {#tx_styleguide_inline_1n_inline_2_child}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_1n_inline_2_child}.{#uid}!=###THIS_UID###',
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => '0',
            ],
        ],

        'parentid' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'parenttable' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'input_1' => [
            'label' => 'input 1',
            'config' => [
                'type' => 'input',
            ],
        ],

        'inline_fal_1' => [
            'label' => 'inline_fal_1',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'image',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'filter' => [
                    'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                    'parameters' => [
                        'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai',
                        'disallowedFileExtensions' => '',
                    ],
                ],
                'appearance' => [
                    'useSortable' => true,
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'width' => '45',
                        'height' => '45c',
                    ],
                    'showPossibleLocalizationRecords' => false,
                    'showSynchronizationLink' => false,
                    'showAllLocalizationLink' => false,
                    'enabledControls' => [
                        'info' => true,
                        'new' => false,
                        'dragdrop' => true,
                        'sort' => false,
                        'hide' => true,
                        'delete' => true,
                        'localize' => true,
                    ],
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                ],
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai',
                                ],
                            ],
                        ],
                    ],
                    'types' => [
                        0 => [
                            'showitem' => '--palette--;;imageoverlayPalette,--palette--;;filePalette',
                        ],
                        1 => [
                            'showitem' => '--palette--;;imageoverlayPalette,--palette--;;filePalette',
                        ],
                        2 => [
                            'showitem' => '--palette--;;imageoverlayPalette,--palette--;;filePalette',
                        ],
                        3 => [
                            'showitem' => '--palette--;;imageoverlayPalette,--palette--;;filePalette',
                        ],
                        4 => [
                            'showitem' => '--palette--;;imageoverlayPalette,--palette--;;filePalette',
                        ],
                        5 => [
                            'showitem' => '--palette--;;imageoverlayPalette,--palette--;;filePalette',
                        ],
                    ],
                ],
            ],
        ],

        'rte_1' => [
            'label' => 'rte_1',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],

        'select_tree_1' => [
            'label' => 'select_tree_1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectTree',
                'foreign_table' => 'pages',
                'size' => 8,
                'treeConfig' => [
                    'expandAll' => true,
                    'parentField' => 'pid',
                    'appearance' => [
                        'showHeader' => true,
                    ],
                ],
            ],
        ],

        't3editor_1' => [
            'label' => 't3editor_1',
            'config' => [
                'type' => 'text',
                'renderType' => 't3editor',
            ],
        ],

    ],

    'types' => [
        '0' => [
            'showitem' => '
                --div--;fields,
                    input_1, inline_fal_1, rte_1, select_tree_1, t3editor_1
            ',
        ],

    ],

];
