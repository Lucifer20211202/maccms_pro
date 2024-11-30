<?php
return [
    '__pattern__'                                                                                                                     =>
        [
            'id'       => '[\\s\\S]*?',
            'ids'      => '[\\s\\S]*?',
            'wd'       => '[\\s\\S]*',
            'en'       => '[\\s\\S]*?',
            'state'    => '[\\s\\S]*?',
            'area'     => '[\\s\\S]*',
            'year'     => '[\\s\\S]*?',
            'lang'     => '[\\s\\S]*?',
            'letter'   => '[\\s\\S]*?',
            'actor'    => '[\\s\\S]*?',
            'director' => '[\\s\\S]*?',
            'tag'      => '[\\s\\S]*?',
            'class'    => '[\\s\\S]*?',
            'order'    => '[\\s\\S]*?',
            'by'       => '[\\s\\S]*?',
            'file'     => '[\\s\\S]*?',
            'name'     => '[\\s\\S]*?',
            'url'      => '[\\s\\S]*?',
            'type'     => '[\\s\\S]*?',
            'sex'      => '[\\s\\S]*?',
            'version'  => '[\\s\\S]*?',
            'blood'    => '[\\s\\S]*?',
            'starsign' => '[\\s\\S]*?',
            'page'     => '\\d+',
            'ajax'     => '\\d+',
            'tid'      => '\\d+',
            'mid'      => '\\d+',
            'rid'      => '\\d+',
            'pid'      => '\\d+',
            'sid'      => '\\d+',
            'nid'      => '\\d+',
            'uid'      => '\\d+',
            'level'    => '\\d+',
            'score'    => '\\d+',
            'limit'    => '\\d+',
        ],
    'map'                                                                                                                             =>
        [
            0 => 'map/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'rss'                                                                                                                             =>
        [
            0 => 'rss/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'index-<page?>'                                                                                                                   =>
        [
            0 => 'index/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'gbook-<page?>'                                                                                                                   =>
        [
            0 => 'gbook/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'gbook$'                                                                                                                          =>
        [
            0 => 'gbook/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'topic-<page?>'                                                                                                                   =>
        [
            0 => 'topic/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'topic$'                                                                                                                          =>
        [
            0 => 'topic/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'topicdetail-<id>'                                                                                                                =>
        [
            0 => 'topic/detail',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'actor-<page?>'                                                                                                                   =>
        [
            0 => 'actor/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'actor$'                                                                                                                          =>
        [
            0 => 'actor/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'actordetail-<id>'                                                                                                                =>
        [
            0 => 'actor/detail',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'actorshow/<area?>-<blood?>-<by?>-<letter?>-<level?>-<order?>-<page?>-<sex?>-<starsign?>'                                         =>
        [
            0 => 'actor/show',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'role-<page?>'                                                                                                                    =>
        [
            0 => 'role/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'role$'                                                                                                                           =>
        [
            0 => 'role/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'roledetail-<id>'                                                                                                                 =>
        [
            0 => 'role/detail',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'roleshow/<by?>-<letter?>-<level?>-<order?>-<page?>-<rid?>'                                                                       =>
        [
            0 => 'role/show',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'vodtype/<id>-<page?>'                                                                                                            =>
        [
            0 => 'vod/type',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'vodtype/<id>'                                                                                                                    =>
        [
            0 => 'vod/type',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'voddetail/<id>'                                                                                                                  =>
        [
            0 => 'vod/detail',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'vodrss-<id>'                                                                                                                     =>
        [
            0 => 'vod/rss',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'vodplay/<id>-<sid>-<nid>'                                                                                                        =>
        [
            0 => 'vod/play',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'voddown/<id>-<sid>-<nid>'                                                                                                        =>
        [
            0 => 'vod/down',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'vodshow/<id>-<area?>-<by?>-<class?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>'                         =>
        [
            0 => 'vod/show',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'vodsearch/<wd?>-<actor?>-<area?>-<by?>-<class?>-<director?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>' =>
        [
            0 => 'vod/search',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'vodplot/<id>-<page?>'                                                                                                            =>
        [
            0 => 'vod/plot',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'vodplot/<id>'                                                                                                                    =>
        [
            0 => 'vod/plot',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'arttype/<id>-<page?>'                                                                                                            =>
        [
            0 => 'art/type',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'arttype/<id>'                                                                                                                    =>
        [
            0 => 'art/type',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'artshow-<id>'                                                                                                                    =>
        [
            0 => 'art/show',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'artdetail-<id>-<page?>'                                                                                                          =>
        [
            0 => 'art/detail',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'artdetail-<id>'                                                                                                                  =>
        [
            0 => 'art/detail',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'artrss-<id>-<page>'                                                                                                              =>
        [
            0 => 'art/rss',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'artshow/<id>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>'                                                          =>
        [
            0 => 'art/show',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'artsearch/<wd?>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>'                                                       =>
        [
            0 => 'art/search',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'label-<file>'                                                                                                                    =>
        [
            0 => 'label/index',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'plotdetail/<id>-<page?>'                                                                                                         =>
        [
            0 => 'plot/plot',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
    'plotdetail/<id>'                                                                                                                 =>
        [
            0 => 'plot/detail',
            1 =>
                [
                ],
            2 =>
                [
                ],
        ],
];