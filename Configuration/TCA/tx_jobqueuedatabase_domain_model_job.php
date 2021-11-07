<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:jobqueue_database/Resources/Private/Language/locallang_db.xlf:tx_jobqueuedatabase_domain_model_job',
        'label' => 'tstamp',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'dividers2tabs' => true,
        'hideTable' => true,
        'enablecolumns' => [

        ],
        'searchFields' => 'uid,queue_name,state,attemps,starttime,tstamp,',
        'iconfile' => 'EXT:jobqueue_database/Resources/Public/Icons/tx_jobqueuedatabase_domain_model_job.gif',
        'readOnly' => true,
        'rootLevel' => 1,
    ],
    'interface' => [
        'showRecordFieldList' => 'queue_name, payload, state, attemps, starttime, tstamp',
    ],
    'types' => [
        '1' => ['showitem' => 'queue_name, payload, state, attemps, starttime, tstamp, '],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
    'columns' => [

        'queue_name' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:jobqueue_database/Resources/Private/Language/locallang_db.xlf:tx_jobqueuedatabase_domain_model_job.queue_name',
            'config' => [
                'readOnly' => true,
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'payload' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:jobqueue_database/Resources/Private/Language/locallang_db.xlf:tx_jobqueuedatabase_domain_model_job.payload',
            'config' => [
                'readOnly' => true,
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'state' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:jobqueue_database/Resources/Private/Language/locallang_db.xlf:tx_jobqueuedatabase_domain_model_job.state',
            'config' => [
                'readOnly' => true,
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
            ],
        ],
        'attemps' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:jobqueue_database/Resources/Private/Language/locallang_db.xlf:tx_jobqueuedatabase_domain_model_job.attemps',
            'config' => [
                'readOnly' => true,
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
            ],
        ],
        'starttime' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:jobqueue_database/Resources/Private/Language/locallang_db.xlf:tx_jobqueuedatabase_domain_model_job.starttime',
            'config' => [
                'readOnly' => true,
                'type' => 'input',
                'size' => 10,
                'eval' => 'datetime',
                'checkbox' => 1,
                'default' => time(),
            ],
        ],
        'tstamp' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:jobqueue_database/Resources/Private/Language/locallang_db.xlf:tx_jobqueuedatabase_domain_model_job.tstamp',
            'config' => [
                'readOnly' => true,
                'type' => 'input',
                'size' => 10,
                'eval' => 'datetime',
                'checkbox' => 1,
                'default' => time(),
            ],
        ],

    ],
];
