<?php

namespace Serakoi\VerifiedBadge;

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '
            <script>
                document.onload = () => {
                    const vBadges = document.querySelector(".verifiedBadge");

                    console.log(vBadges)
                    if(vBadges.length > 0){
                        for(const b of vBadges){
                            const parentBadge = b.parentElement;
                            parentBadge.classList.add("verifiedBadgeParent");
                        }
                    }
                })
            </script>

            <style>
                .verifiedBadgeParent {
                    background-color: transparent;
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
                    height: 100%;
                    width: auto;
                    background-repeat: no-repeat;
                    background-color: rgba(0,0,255,0.5);
                }
            </style>';
        })
];