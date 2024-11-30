<?php
return [
    '1'  => [
        'name' => lang('menu/index'), 'icon' => 'layui-icon-home', 'sub' => [
            '11' => ["show" => 1, "name" => lang('menu/welcome'), 'controller' => 'index', 'action' => 'welcome'],
            '12' => ["show" => 1, "name" => lang('menu/quickmenu'), 'controller' => 'index', 'action' => 'quickmenu'],

            '1001' => [
                "show" => 0, "name" => '--'.lang('admin/menu/switch'), 'controller' => 'index', 'action' => 'iframe'
            ],
            '1002' => [
                "show" => 0, "name" => '--'.lang('admin/menu/clearCache'), 'controller' => 'index', 'action' => 'clear'
            ],
            '1003' => [
                "show" => 0, "name" => '--'.lang('admin/menu/lock'), 'controller' => 'index', 'action' => 'unlocked'
            ],
            '1004' => [
                "show" => 0, "name" => '--'.lang('admin/menu/public'), 'controller' => 'index', 'action' => 'select'
            ],
            '1005' => [
                "show" => 0, "name" => '--'.lang('admin/menu/file'), 'controller' => 'upload', 'action' => 'upload'
            ],
        ]
    ],
    '2'  => [
        'name' => lang('menu/system'), 'icon' => 'layui-icon-engine', 'sub' => [
            '21'  => ["show" => 1, 'name' => lang('menu/config'), 'controller' => 'system', 'action' => 'config'],
            '210' => ["show" => 1, "name" => lang('menu/configseo'), 'controller' => 'system', 'action' => 'configseo'],
            '211' => [
                "show" => 1, "name" => lang('menu/configuser'), 'controller' => 'system', 'action' => 'configuser'
            ],
            '212' => [
                "show" => 1, "name" => lang('menu/configcomment'), 'controller' => 'system', 'action' => 'configcomment'
            ],
            '213' => [
                "show" => 1, "name" => lang('menu/configupload'), 'controller' => 'system', 'action' => 'configupload'
            ],
            '22'  => ["show" => 1, "name" => lang('menu/configurl'), 'controller' => 'system', 'action' => 'configurl'],
            '23'  => [
                "show" => 1, "name" => lang('menu/configplay'), 'controller' => 'system', 'action' => 'configplay'
            ],
            '24'  => [
                "show" => 1, "name" => lang('menu/configcollect'), 'controller' => 'system', 'action' => 'configcollect'
            ],
            '25'  => [
                "show"   => 1, "name" => lang('menu/configinterface'), 'controller' => 'system',
                'action' => 'configinterface'
            ],
            '26'  => ["show" => 1, "name" => lang('menu/configapi'), 'controller' => 'system', 'action' => 'configapi'],
            '27'  => [
                "show" => 1, "name" => lang('menu/configconnect'), 'controller' => 'system', 'action' => 'configconnect'
            ],
            '28'  => ["show" => 1, "name" => lang('menu/configpay'), 'controller' => 'system', 'action' => 'configpay'],
            '29'  => [
                "show" => 1, "name" => lang('menu/configweixin'), 'controller' => 'system', 'action' => 'configweixin'
            ],
            '291' => [
                "show" => 1, "name" => lang('menu/configemail'), 'controller' => 'system', 'action' => 'configemail'
            ],
            '292' => ["show" => 1, "name" => lang('menu/configsms'), 'controller' => 'system', 'action' => 'configsms'],

            '2910' => ["show" => 1, "name" => lang('menu/timming'), 'controller' => 'timming', 'action' => 'index'],
            '2911' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/timing'), 'controller' => 'timming', 'action' => 'info'
            ],
            '2912' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/scheduled'), 'controller' => 'timming', 'action' => 'del'
            ],
            '2913' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/timed'), 'controller' => 'timming', 'action' => 'field'
            ],
            '2920' => ["show" => 1, "name" => lang('menu/domain'), 'controller' => 'domain', 'action' => 'index'],
            '2922' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/station_del'), 'controller' => 'domain', 'action' => 'del'
            ],
            '2923' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/station_exp'), 'controller' => 'domain',
                'action' => 'export'
            ],
            '2924' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/station_imp'), 'controller' => 'domain',
                'action' => 'import'
            ],
        ]
    ],
    '3'  => [
        'name' => lang('menu/base'), 'icon' => 'layui-icon-set', 'sub' => [
            '31' => ["show" => 1, 'name' => lang('menu/type'), 'controller' => 'type', 'action' => 'index'],

            '3101' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/classification_info'), 'controller' => 'type',
                'action' => 'info'
            ],
            '3102' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/classification_bat'), 'controller' => 'type',
                'action' => 'batch'
            ],
            '3103' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/category'), 'controller' => 'type', 'action' => 'del'
            ],
            '3104' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/classification'), 'controller' => 'type',
                'action' => 'field'
            ],
            '3105' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/classification_ext'), 'controller' => 'type',
                'action' => 'extend'
            ],

            '32'   => ["show" => 1, 'name' => lang('menu/topic'), 'controller' => 'topic', 'action' => 'data'],
            '3201' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/thematic_info'), 'controller' => 'topic',
                'action' => 'info'
            ],
            '3202' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/thematic_bat'), 'controller' => 'topic',
                'action' => 'batch'
            ],
            '3203' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/thematic_del'), 'controller' => 'topic', 'action' => 'del'
            ],
            '3204' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/topic'), 'controller' => 'topic', 'action' => 'field'
            ],

            '33'   => ["show" => 1, 'name' => lang('menu/link'), 'controller' => 'link', 'action' => 'index'],
            '3301' => [
                "show"       => 0, 'name' => '--'.lang('admin/menu/friendsChainInformationMaintenance'),
                'controller' => 'link', 'action' => 'info'
            ],
            '3302' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/bulkModificationOfFriendsChain'), 'controller' => 'link',
                'action' => 'batch'
            ],
            '3303' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/friendsChainDelete'), 'controller' => 'link',
                'action' => 'del'
            ],
            '3304' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/friendsChainStatus'), 'controller' => 'link',
                'action' => 'field'
            ],

            '34'   => ["show" => 1, 'name' => lang('menu/gbook'), 'controller' => 'gbook', 'action' => 'data'],
            '3401' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/messageMaintenance'), 'controller' => 'gbook',
                'action' => 'info'
            ],
            '3402' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/deleteMessage'), 'controller' => 'gbook', 'action' => 'del'
            ],
            '3404' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/messageStatus'), 'controller' => 'gbook',
                'action' => 'field'
            ],

            '35'   => ["show" => 1, 'name' => lang('menu/comment'), 'controller' => 'comment', 'action' => 'data'],
            '3501' => [
                "show"       => 0, 'name' => '--'.lang('admin/menu/reviewInformationMaintenance'),
                'controller' => 'comment', 'action' => 'info'
            ],
            '3502' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/deleteComment'), 'controller' => 'comment',
                'action' => 'del'
            ],
            '3504' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/commentStatus'), 'controller' => 'comment',
                'action' => 'field'
            ],

            '36'   => ["show" => 1, 'name' => lang('menu/images'), 'controller' => 'annex', 'action' => 'data'],
            '3604' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/attachmentFolder'), 'controller' => 'annex',
                'action' => 'file'
            ],
            '3605' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/attachmentDetection'), 'controller' => 'annex',
                'action' => 'check'
            ],
            '3606' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/attachmentDataInitialization'), 'controller' => 'annex',
                'action' => 'init'
            ],
            '3601' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/attachmentDeletion'), 'controller' => 'annex',
                'action' => 'del'
            ],
            '3602' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/syncPictureOptions'), 'controller' => 'images',
                'action' => 'opt'
            ],
            '3603' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/syncPictureMethod'), 'controller' => 'images',
                'action' => 'sync'
            ],

            '37'   => [
                "show"   => 1, 'name' => lang('menu/advertising_management'), 'controller' => 'banner',
                'action' => 'index'
            ],
            '3701' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/adRemoval'), 'controller' => 'banner', 'action' => 'del'
            ],
            '3702' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/syncPictureOptions'), 'controller' => 'banner',
                'action' => 'opt'
            ],
            '3703' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/syncPictureMethod'), 'controller' => 'banner',
                'action' => 'sync'
            ],
            '3704' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/adAdd'), 'controller' => 'banner', 'action' => 'info'
            ],
            '3705' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/adPositionAdded'), 'controller' => 'banner',
                'action' => 'infocat'
            ],
            '3706' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/adField'), 'controller' => 'banner', 'action' => 'field'
            ],

            '38'   => ["show" => 1, 'name' => lang('menu/app_management'), 'controller' => 'app', 'action' => 'index'],
            '3801' => [
                "show"   => 0, 'name' => lang('admin/menu/administration_addView'), 'controller' => 'app',
                'action' => 'add'
            ],
            '3802' => [
                "show"   => 0, 'name' => lang('admin/menu/administration_processAdd'), 'controller' => 'app',
                'action' => 'doadd'
            ],
            '3803' => [
                "show" => 0, 'name' => lang('admin/menu/administration_edit'), 'controller' => 'app', 'action' => 'edit'
            ],
            '3804' => [
                "show"   => 0, 'name' => lang('admin/menu/administration_processEditing'), 'controller' => 'app',
                'action' => 'doedit'
            ],
            '3805' => [
                "show"   => 0, 'name' => lang('admin/menu/administration_delete'), 'controller' => 'app',
                'action' => 'del'
            ],
        ]
    ],
    '5'  => [
        'name' => lang('menu/art'), 'icon' => 'layui-icon-file', 'sub' => [
            '51'   => ["show" => 1, 'name' => lang('menu/art_data'), 'controller' => 'art', 'action' => 'data'],
            '5101' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/articleInformationMaintenance'), 'controller' => 'art',
                'action' => 'info'
            ],
            '5102' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/articleDeletion'), 'controller' => 'art', 'action' => 'del'
            ],
            '5103' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/articleStatus'), 'controller' => 'art', 'action' => 'field'
            ],

            '52'  => ["show" => 1, 'name' => lang('menu/art_add'), 'controller' => 'art', 'action' => 'info'],
            '53'  => [
                "show"  => 1, 'name' => lang('menu/art_data_lock'), 'controller' => 'art', 'action' => 'data',
                'param' => 'lock=1'
            ],
            '54'  => [
                "show"  => 1, 'name' => lang('menu/art_data_audit'), 'controller' => 'art', 'action' => 'data',
                'param' => 'status=0'
            ],
            '59'  => ["show" => 1, 'name' => lang('menu/art_batch'), 'controller' => 'art', 'action' => 'batch'],
            '591' => [
                "show"  => 1, 'name' => lang('menu/art_repeat'), 'controller' => 'art', 'action' => 'data',
                'param' => 'repeat=1'
            ],
        ]
    ],
    '4'  => [
        'name' => lang('menu/vod'), 'icon' => 'layui-icon-video', 'sub' => [
            '41'   => ["show" => 1, 'name' => lang('menu/server'), 'controller' => 'vodserver', 'action' => 'index'],
            '4101' => [
                "show"       => 0, 'name' => '--'.lang('admin/menu/serverGroupInformationMaintenance'),
                'controller' => 'vodserver', 'action' => 'info'
            ],
            '4102' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/serverGroupDeletion'), 'controller' => 'vodserver',
                'action' => 'del'
            ],
            '4103' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/serverGroupStatus'), 'controller' => 'vodserver',
                'action' => 'field'
            ],

            '42'   => ["show" => 1, 'name' => lang('menu/player'), 'controller' => 'vodplayer', 'action' => 'index'],
            '4201' => [
                "show"       => 0, 'name' => '--'.lang('admin/menu/playerInformationMaintenance'),
                'controller' => 'vodplayer', 'action' => 'info'
            ],
            '4202' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/playerDelete'), 'controller' => 'vodplayer',
                'action' => 'del'
            ],
            '4203' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/playerGroupStatus'), 'controller' => 'vodplayer',
                'action' => 'field'
            ],

            '43'   => ["show" => 1, 'name' => lang('menu/downer'), 'controller' => 'voddowner', 'action' => 'index'],
            '4301' => [
                "show"       => 0, 'name' => '--'.lang('admin/menu/downloaderInformationMaintenance'),
                'controller' => 'voddowner', 'action' => 'info'
            ],
            '4302' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/downloaderDelete'), 'controller' => 'voddowner',
                'action' => 'del'
            ],
            '4303' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/downloaderGroupStatus'), 'controller' => 'voddowner',
                'action' => 'field'
            ],

            '44'   => ["show" => 1, 'name' => lang('menu/vod_data'), 'controller' => 'vod', 'action' => 'data'],
            '4401' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/videoInformationMaintenance'), 'controller' => 'vod',
                'action' => 'info'
            ],
            '4402' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/videoDeletion'), 'controller' => 'vod', 'action' => 'del'
            ],
            '4403' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/videoStatus'), 'controller' => 'vod', 'action' => 'field'
            ],

            '45'  => ["show" => 1, 'name' => lang('menu/vod_add'), 'controller' => 'vod', 'action' => 'info'],
            '46'  => [
                "show"  => 1, 'name' => lang('menu/vod_data_url_empty'), 'controller' => 'vod', 'action' => 'data',
                'param' => 'url=1'
            ],
            '47'  => [
                "show"  => 1, 'name' => lang('menu/vod_data_lock'), 'controller' => 'vod', 'action' => 'data',
                'param' => 'lock=1'
            ],
            '48'  => [
                "show"  => 1, 'name' => lang('menu/vod_data_audit'), 'controller' => 'vod', 'action' => 'data',
                'param' => 'status=0'
            ],
            '481' => [
                "show"  => 1, 'name' => lang('menu/vod_data_points'), 'controller' => 'vod', 'action' => 'data',
                'param' => 'points=1'
            ],
            '482' => [
                "show"  => 1, 'name' => lang('menu/vod_data_plot'), 'controller' => 'vod', 'action' => 'data',
                'param' => 'plot=1'
            ],
            '49'  => ["show" => 1, 'name' => lang('menu/vod_batch'), 'controller' => 'vod', 'action' => 'batch'],
            '491' => [
                "show"  => 1, 'name' => lang('menu/vod_repeat'), 'controller' => 'vod', 'action' => 'data',
                'param' => 'repeat=1'
            ],

            '495'  => [
                "show" => 1, 'name' => lang('menu/actor'), 'controller' => 'actor', 'action' => 'data', 'param' => ''
            ],
            '4951' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/actorInformationMaintenance'), 'controller' => 'actor',
                'action' => 'info'
            ],
            '4952' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/actorDeletion'), 'controller' => 'actor', 'action' => 'del'
            ],
            '4953' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/actorStatus'), 'controller' => 'actor', 'action' => 'field'
            ],
            '4954' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/addActor'), 'controller' => 'actor', 'action' => 'info'
            ],

            '496'  => [
                "show" => 1, 'name' => lang('menu/role'), 'controller' => 'role', 'action' => 'data', 'param' => ''
            ],
            '4961' => [
                "show"   => 0, 'name' => '--'.lang('admin/menu/roleInformationMaintenance'), 'controller' => 'role',
                'action' => 'info'
            ],
            '4962' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/roleDeletion'), 'controller' => 'role', 'action' => 'del'
            ],
            '4963' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/roleStatus'), 'controller' => 'role', 'action' => 'field'
            ],
            '4964' => [
                "show" => 0, 'name' => '--'.lang('admin/menu/addRole'), 'controller' => 'role', 'action' => 'info'
            ],
        ]
    ],
    '12' => [
        'name' => lang('menu/website'), 'icon' => 'layui-icon-website', 'sub' => [
            '121'   => ["show"   => 1, 'name' => lang('menu/website_data'), 'controller' => 'website',
                        'action' => 'data'
            ],
            '12101' => ["show"       => 0, 'name' => '--'.lang('admin/menu/websiteInformationMaintenance'),
                        'controller' => 'website', 'action' => 'info'
            ],
            '12102' => ["show"   => 0, 'name' => '--'.lang('admin/menu/urlDeletion'), 'controller' => 'website',
                        'action' => 'del'
            ],
            '12103' => ["show"   => 0, 'name' => '--'.lang('admin/menu/urlStatus'), 'controller' => 'website',
                        'action' => 'field'
            ],

            '122'  => ["show" => 1, 'name' => lang('menu/website_add'), 'controller' => 'website', 'action' => 'info'],
            '123'  => [
                "show"  => 1, 'name' => lang('menu/website_data_lock'), 'controller' => 'website', 'action' => 'data',
                'param' => 'lock=1'
            ],
            '124'  => [
                "show"  => 1, 'name' => lang('menu/website_data_audit'), 'controller' => 'website', 'action' => 'data',
                'param' => 'status=0'
            ],
            '129'  => [
                "show" => 1, 'name' => lang('menu/website_batch'), 'controller' => 'website', 'action' => 'batch'
            ],
            '1291' => ["show"   => 1, 'name' => lang('menu/website_repeat'), 'controller' => 'website',
                       'action' => 'data', 'param' => 'repeat=1'
            ],
        ]
    ],
    '6'  => [
        'name' => lang('menu/users'), 'icon' => 'layui-icon-user', 'sub' => [
            '61'   => ["show" => 1, 'name' => lang('menu/admin'), 'controller' => 'admin', 'action' => 'index'],
            '6101' => ["show"       => 0, 'name' => '--'.lang('admin/menu/administratorInformationMaintenance'),
                       'controller' => 'admin', 'action' => 'info'
            ],
            '6102' => ["show"   => 0, 'name' => '--'.lang('admin/menu/administratorDelete'), 'controller' => 'admin',
                       'action' => 'del'
            ],
            '6103' => ["show"   => 0, 'name' => '--'.lang('admin/menu/administratorStatus'), 'controller' => 'admin',
                       'action' => 'field'
            ],

            '62'   => ["show" => 1, 'name' => lang('menu/group'), 'controller' => 'group', 'action' => 'index'],
            '6201' => ["show"       => 0, 'name' => '--'.lang('admin/menu/memberGroupInformationMaintenance'),
                       'controller' => 'group', 'action' => 'info'
            ],
            '6202' => ["show"   => 0, 'name' => '--'.lang('admin/menu/memberGroupDeletion'), 'controller' => 'group',
                       'action' => 'del'
            ],
            '6203' => ["show"   => 0, 'name' => '--'.lang('admin/menu/memberGroupStatus'), 'controller' => 'group',
                       'action' => 'field'
            ],

            '63'   => ["show" => 1, 'name' => lang('menu/user'), 'controller' => 'user', 'action' => 'data'],
            '6301' => ["show"       => 0, 'name' => '--'.lang('admin/menu/memberInformationMaintenance'),
                       'controller' => 'user', 'action' => 'info'
            ],
            '6302' => ["show"   => 0, 'name' => '--'.lang('admin/menu/memberDeletion'), 'controller' => 'user',
                       'action' => 'del'
            ],
            '6303' => ["show"   => 0, 'name' => '--'.lang('admin/menu/memberStatus'), 'controller' => 'user',
                       'action' => 'field'
            ],

            '64'   => ["show" => 1, 'name' => lang('menu/card'), 'controller' => 'card', 'action' => 'index'],
            '6401' => ["show"       => 0, 'name' => '--'.lang('admin/menu/rechargeCardInformationMaintenance'),
                       'controller' => 'card', 'action' => 'info'
            ],
            '6402' => ["show"   => 0, 'name' => '--'.lang('admin/menu/rechargeCardDeletion'), 'controller' => 'card',
                       'action' => 'del'
            ],

            '65'   => ["show" => 1, 'name' => lang('menu/order'), 'controller' => 'order', 'action' => 'index'],
            '6501' => ["show"   => 0, 'name' => '--'.lang('admin/menu/orderDeletion'), 'controller' => 'order',
                       'action' => 'del'
            ],

            '66'   => ["show" => 1, 'name' => lang('menu/ulog'), 'controller' => 'ulog', 'action' => 'index'],
            '6601' => ["show"   => 0, 'name' => '--'.lang('admin/menu/accessLogDeletion'), 'controller' => 'ulog',
                       'action' => 'del'
            ],

            '67'   => ["show" => 1, 'name' => lang('menu/plog'), 'controller' => 'plog', 'action' => 'index'],
            '6701' => ["show"   => 0, 'name' => '--'.lang('admin/menu/deletePointsLog'), 'controller' => 'plog',
                       'action' => 'del'
            ],

            '68'   => ["show" => 1, 'name' => lang('menu/cash'), 'controller' => 'cash', 'action' => 'index'],
            '6801' => ["show"   => 0, 'name' => '--'.lang('admin/menu/withdrawalDeletion'), 'controller' => 'cash',
                       'action' => 'del'
            ],
            '6802' => ["show"   => 0, 'name' => '--'.lang('admin/menu/withdrawalReview'), 'controller' => 'cash',
                       'action' => 'audit'
            ],
        ]
    ],
    '7'  => [
        'name' => lang('menu/templates'), 'icon' => 'layui-icon-template', 'sub' => [
            '71'   => [
                "show"  => 1, 'name' => lang('menu/theme/config'), 'controller' => 'tpl_config', 'action' => 'theme',
                'param' => ''
            ],
            '72'   => ["show" => 1, 'name' => lang('menu/template'), 'controller' => 'template', 'action' => 'index'],
            '7201' => ["show"       => 0, 'name' => '--'.lang('admin/menu/templateInformationMaintenance'),
                       'controller' => 'template', 'action' => 'info'
            ],
            '7202' => ["show"   => 0, 'name' => '--'.lang('admin/menu/templateDeletion'), 'controller' => 'template',
                       'action' => 'del'
            ],
            '73'   => ["show"   => 1, 'name' => lang('menu/template_market'), 'controller' => 'addon',
                       'action' => 'markettheme'
            ],
            '74'   => ["show"  => 1, 'name' => lang('menu/ads'), 'controller' => 'template', 'action' => 'ads',
                       'param' => ''
            ],
            '75'   => ["show" => 1, 'name' => lang('menu/wizard'), 'controller' => 'template', 'action' => 'wizard'],
        ]
    ],
    '8'  => [
        'name' => lang('menu/make'), 'icon' => 'layui-icon-component', 'sub' => [
            '81'  => ["show" => 1, 'name' => lang('menu/make_opt'), 'controller' => 'make', 'action' => 'opt'],
            '82'  => ["show" => 1, 'name' => lang('menu/make_index'), 'controller' => 'make', 'action' => 'index'],
            '821' => ["show"   => 1, 'name' => lang('menu/make_index_wap'), 'controller' => 'make',
                      'action' => 'index?ac2=wap'
            ],
            '83'  => ["show" => 1, 'name' => lang('menu/make_map'), 'controller' => 'make', 'action' => 'map'],

            '8101' => ["show"   => 0, 'name' => '--'.lang('admin/menu/generationEntry'), 'controller' => 'make',
                       'action' => 'make'
            ],
            '8102' => ["show"   => 0, 'name' => '--'.lang('admin/menu/generateRSS'), 'controller' => 'make',
                       'action' => 'rss'
            ],
            '8103' => ["show"   => 0, 'name' => '--'.lang('admin/menu/generateClassification'), 'controller' => 'make',
                       'action' => 'type'
            ],
            '8104' => ["show"   => 0, 'name' => '--'.lang('admin/menu/generateTopicHomePage'), 'controller' => 'make',
                       'action' => 'topic_index'
            ],
            '8105' => ["show"   => 0, 'name' => '--'.lang('admin/menu/generateThematicContent'), 'controller' => 'make',
                       'action' => 'topic_info'
            ],
            '8106' => ["show"   => 0, 'name' => '--'.lang('admin/menu/generateContentPage'), 'controller' => 'make',
                       'action' => 'info'
            ],
            '8107' => ["show"   => 0, 'name' => '--'.lang('admin/menu/generateCustomPage'), 'controller' => 'make',
                       'action' => 'label'
            ],
        ]
    ],
    '9'  => [
        'name' => lang('menu/cjs'), 'icon' => 'layui-icon-edit', 'sub' => [
            '91'   => ["show" => 0, 'name' => lang('menu/union'), 'controller' => 'collect', 'action' => 'union'],
            '9101' => ["show"   => 0, 'name' => '--'.lang('admin/menu/acquisitionEntrance'), 'controller' => 'collect',
                       'action' => 'api'
            ],
            '9102' => ["show"   => 0, 'name' => '--'.lang('admin/menu/breakpointCollection'), 'controller' => 'collect',
                       'action' => 'load'
            ],
            '9103' => ["show"       => 0, 'name' => '--'.lang('admin/menu/bindingClassification'),
                       'controller' => 'collect', 'action' => 'bind'
            ],
            '9104' => ["show"   => 0, 'name' => '--'.lang('admin/menu/captureVideo'), 'controller' => 'collect',
                       'action' => 'vod'
            ],
            '9105' => ["show"   => 0, 'name' => '--'.lang('admin/menu/collectArticles'), 'controller' => 'collect',
                       'action' => 'art'
            ],
            '92'   => ["show"   => 0, 'name' => lang('menu/collect_timming'), 'controller' => 'collect',
                       'action' => 'timing'
            ],

            '93'   => ["show" => 1, 'name' => lang('menu/collect'), 'controller' => 'collect', 'action' => 'index'],
            '9301' => ["show"       => 0, 'name' => '--'.lang('admin/menu/userDefinedResourceInformationMaintenance'),
                       'controller' => 'collect', 'action' => 'info'
            ],
            '9302' => ["show"       => 0, 'name' => '--'.lang('admin/menu/customResourceDeletion'),
                       'controller' => 'collect', 'action' => 'del'
            ],

            '94'   => ["show" => 1, 'name' => lang('menu/cj'), 'controller' => 'cj', 'action' => 'index'],
            '9401' => ["show"       => 0, 'name' => '--'.lang('admin/menu/customRuleInformationMaintenance'),
                       'controller' => 'cj', 'action' => 'info'
            ],
            '9402' => ["show"   => 0, 'name' => '--'.lang('admin/menu/customRuleDeletion'), 'controller' => 'cj',
                       'action' => 'del'
            ],
            '9403' => ["show"       => 0, 'name' => '--'.lang('admin/menu/customRulePublishingScheme'),
                       'controller' => 'cj', 'action' => 'program'
            ],
            '9404' => ["show"   => 0, 'name' => '--'.lang('admin/menu/customRuleCollectionURL'), 'controller' => 'cj',
                       'action' => 'col_url'
            ],
            '9405' => ["show"       => 0, 'name' => '--'.lang('admin/menu/customRuleCollectionContent'),
                       'controller' => 'cj', 'action' => 'col_content'
            ],
            '9406' => ["show"       => 0, 'name' => '--'.lang('admin/menu/customRulePublishingContent'),
                       'controller' => 'cj', 'action' => 'publish'
            ],
            '9407' => ["show"   => 0, 'name' => '--'.lang('admin/menu/customRuleExport'), 'controller' => 'cj',
                       'action' => 'export'
            ],
            '9408' => ["show"   => 0, 'name' => '--'.lang('admin/menu/customRuleImport'), 'controller' => 'cj',
                       'action' => 'import'
            ],
        ]
    ],
    '10' => [
        'name' => lang('menu/db'), 'icon' => 'layui-icon-code-circle', 'sub' => [
            '101'   => ["show" => 1, 'name' => lang('menu/database'), 'controller' => 'database', 'action' => 'index'],
            '10001' => ["show"   => 0, 'name' => '--'.lang('admin/menu/databaseBackup'), 'controller' => 'database',
                        'action' => 'export'
            ],
            '10002' => ["show"   => 0, 'name' => '--'.lang('admin/menu/databaseRestore'), 'controller' => 'database',
                        'action' => 'import'
            ],
            '10003' => ["show"       => 0, 'name' => '--'.lang('admin/menu/databaseOptimization'),
                        'controller' => 'database', 'action' => 'optimize'
            ],
            '10004' => ["show"   => 0, 'name' => '--'.lang('admin/menu/databaseRepair'), 'controller' => 'database',
                        'action' => 'repair'
            ],
            '10005' => ["show"       => 0, 'name' => '--'.lang('admin/menu/databaseDeleteBackup'),
                        'controller' => 'database', 'action' => 'del'
            ],
            '10006' => ["show"       => 0, 'name' => '--'.lang('admin/menu/databaseTableInformation'),
                        'controller' => 'database', 'action' => 'columns'
            ],

            '102' => ["show" => 1, 'name' => lang('menu/database_sql'), 'controller' => 'database', 'action' => 'sql'],
            '103' => ["show" => 1, 'name' => lang('menu/database_rep'), 'controller' => 'database', 'action' => 'rep'],
        ]
    ],
    '11' => [
        'name' => lang('menu/apps'), 'icon' => 'layui-icon-cellphone-fine', 'sub' => [
            '111'   => [
                "show" => 1, 'name' => lang('menu/addon'), 'controller' => 'addon', 'action' => 'index', 'param' => ''
            ],
            '112'   => [
                "show" => 1, 'name' => lang('menu/market'), 'controller' => 'addon', 'action' => 'market', 'param' => ''
            ],
            '113'   => [
                "show"  => 1, 'name' => lang('menu/urlsend'), 'controller' => 'sitesend', 'action' => 'index',
                'param' => ''
            ],
            '11200' => ["show"   => 0, 'name' => '--'.lang('admin/menu/pushInlet'), 'controller' => 'urlsend',
                        'action' => 'push'
            ],
            '11201' => ["show"   => 0, 'name' => '--'.lang('admin/menu/baiduActivePush'), 'controller' => 'urlsend',
                        'action' => 'baidu_push'
            ],
            '11202' => ["show"   => 0, 'name' => '--'.lang('admin/menu/baiduBearSPawPush'), 'controller' => 'urlsend',
                        'action' => 'baidu_bear'
            ],

            '11100' => ["show"   => 0, 'name' => '--'.lang('admin/menu/applicationPlugInList'), 'controller' => 'addon',
                        'action' => 'downloaded'
            ],
            '11101' => ["show"       => 0, 'name' => '--'.lang('admin/menu/applicationPlugInInstallation'),
                        'controller' => 'addon', 'action' => 'install'
            ],
            '11102' => ["show"       => 0, 'name' => '--'.lang('admin/menu/applicationPluginUninstall'),
                        'controller' => 'addon', 'action' => 'uninstall'
            ],
            '11103' => ["show"       => 0, 'name' => '--'.lang('admin/menu/applicationPlugInConfiguration'),
                        'controller' => 'addon', 'action' => 'config'
            ],
            '11104' => ["show"       => 0, 'name' => '--'.lang('admin/menu/applicationPlugInStatus'),
                        'controller' => 'addon', 'action' => 'state'
            ],
            '11105' => ["show"       => 0, 'name' => '--'.lang('admin/menu/applicationPluginUpload'),
                        'controller' => 'addon', 'action' => 'local'
            ],
            '11106' => ["show"       => 0, 'name' => '--'.lang('admin/menu/applicationPlugInUpgrade'),
                        'controller' => 'addon', 'action' => 'upgrade'
            ],
            '11107' => ["show"   => 0, 'name' => '--'.lang('admin/menu/addApplicationPlugIns'), 'controller' => 'addon',
                        'action' => 'add'
            ],
        ]
    ],
    '13' => [
        'name' => lang('menu/others'), 'icon' => 'layui-icon-note', 'sub' => [
            '1301' => ["show"   => 1, 'name' => lang('menu/others/botcensus'), 'controller' => 'Others',
                       'action' => 'botlist'
            ],
        ]
    ],

];