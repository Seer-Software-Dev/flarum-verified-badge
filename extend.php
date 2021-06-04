<?php

namespace Serakoi\VerifiedBadge;

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '
            <style>
                .Badge {
                    background-color: transparent;
                    width: 27px;
                    height: 27px;
                }
                .badges {
                    list-style-image: initial;
                }
                .verifiedBadge {
                    line-height: 21px;
                    text-align: center;
                    font-size: 12.32px;
                    box-shadow: none!important;
                    margin-left: 0px !important;
                    background-image: url(https://seer-software.com/svg/verified.svg);
                    background-color: initial;
                    background-size: 100% auto;
                    display: block;
                    height: 25px;
                    width: auto;
                }
            </style>';
        })
];