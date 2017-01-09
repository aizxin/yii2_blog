<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    /* 目标语言 */
    'language' => 'zh-CN',

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // 路由优化
        'urlManager'=>[

			'enablePrettyUrl' => true, //对url进行美化

			'showScriptName' => false,//隐藏index.php

			'suffix' => '.html',//后缀

			'enableStrictParsing'=>FALSE,//不要求网址严格匹配，则不需要输入rules

			'rules' => []//网址匹配规则
		],
		/**
         * 多语言管理，
         * 将“源语言”翻译成“目标语言”，必须使用\Yii::t('common','中文')，当源语言和目标语言相同时默认不翻译
         * common/messages中必须存在“目标语言(en-US)”文件夹，且对应语言文件中存在：'中文'=>'English'
         */
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath'=>'@common/messages',
                    'fileMap' => [
                        'common'=>'common.php',
                        'backend'=>'backend.php',
                        'frontend'=>'frontend.php',
                    ],
                ],
            ],
        ],
    ],
];
