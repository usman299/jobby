@extends('layouts.front')
@section('content')
    <section class="emPageAbout padding-t-60 emPage__faq">
        <div class="em__pkLink emBlock__border bg-white margin-b-10 border-t-0">
            <ul class="nav__list mb-0">
                <li>
                    <a href="mailto:example@email.com" class="item-link">
                        <div class="group">
                            <div class="icon bg-yellow">
                                <svg id="Iconly_Curved_Message" data-name="Iconly/Curved/Message"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Message" transform="translate(1.941 2.258)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M8.828,0s-2.541,3.05-4.4,3.05S0,0,0,0"
                                              transform="translate(3.121 4.882)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M0,7.217C0,1.8,1.885,0,7.54,0s7.54,1.8,7.54,7.217-1.885,7.217-7.54,7.217S0,12.63,0,7.217Z"
                                              transform="translate(0 0)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>

                            </div>
                            <span class="path__name">Assistance par courrier électronique</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content_text bg-white emBlock__border margin-b-10">
            <h2 class="size-20 weight-500 color-secondary mb-2">Questions fréquentes</h2>
            <p>
                We get asked these questions a lot, so we made this small section to help you out identifying
                what you need faster.
            </p>
        </div>

        <!-- Start emPage___profile -->
        <div class="em__pkLink accordion bg-white emBlock__border pt-3" id="accordionExample5">
            <ul class="nav__list with_border fullBorder">
                <li>
                    <div id="headingOne-text">
                        <div class="item-link main_item" data-toggle="collapse" data-target="#collapseOne-text"
                             aria-expanded="true" aria-controls="collapseOne-text">
                            <div class="group">
                                <div>
                                            <span class="path__name text-transform-none">Is this built with
                                                React ?</span>
                                </div>
                            </div>
                            <div class="group">
                                <span class="short__name"></span>
                                <i class="tio-add iocn__plus -arrwo"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne-text" class="collapse show" aria-labelledby="headingOne-text"
                         data-parent="#accordionExample5">
                        <div class="card-body">
                            <p class="mb-0 size-15 color-text">
                                Some placeholder content for the first accordion panel. This panel is shown
                                by
                                default, thanks to the .show class.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div id="headingTwo-text">
                        <div class="item-link main_item" data-toggle="collapse" data-target="#collapseTwo-text"
                             aria-expanded="false" aria-controls="collapseTwo-text">
                            <div class="group">
                                <div>
                                    <span class="path__name text-transform-none">Is this a PWA?</span>
                                </div>
                            </div>
                            <div class="group">
                                <span class="short__name"></span>
                                <i class="tio-add iocn__plus -arrwo"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo-text" class="collapse" aria-labelledby="headingTwo-text"
                         data-parent="#accordionExample5">
                        <div class="em__pkLink">
                            <div class="card-body">
                                <p class="mb-0 size-15 color-text">
                                    Yes. Our item is a PWA. We have a servier worker and a manifest.json file
                                    ready and prepared for you to use the item offline.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div id="headingThree-text">
                        <div class="item-link main_item" data-toggle="collapse"
                             data-target="#collapseThree-text" aria-expanded="false"
                             aria-controls="collapseThree-text">
                            <div class="group">
                                <div>
                                            <span class="path__name text-transform-none">What CSS framework this theme
                                                use?</span>
                                </div>
                            </div>
                            <div class="group">
                                <span class="short__name"></span>
                                <i class="tio-add iocn__plus -arrwo"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree-text" class="collapse" aria-labelledby="headingThree-text"
                         data-parent="#accordionExample5">
                        <div class="card-body">
                            <p class="mb-0 size-15 color-text">
                                We are using the latest Bootstrap 4.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div id="headingFour-text">
                        <div class="item-link main_item" data-toggle="collapse" data-target="#collapseFour-text"
                             aria-expanded="false" aria-controls="collapseFour-text">
                            <div class="group">
                                <div>
                                            <span class="path__name text-transform-none">Is this a WordPres
                                                Theme?</span>
                                </div>
                            </div>
                            <div class="group">
                                <span class="short__name"></span>
                                <i class="tio-add iocn__plus -arrwo"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseFour-text" class="collapse" aria-labelledby="headingFour-text"
                         data-parent="#accordionExample5">
                        <div class="card-body">
                            <p class="mb-0 size-15 color-text">
                                No. Our item is an HTML, CSS3, and JS Site Template. You can however convert it
                                to a WordPress Theme.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div id="headingFive-text">
                        <div class="item-link main_item" data-toggle="collapse" data-target="#collapseFive-text"
                             aria-expanded="false" aria-controls="collapseFive-text">
                            <div class="group">
                                <div>
                                            <span class="path__name text-transform-none">
                                                What can I do with this template?
                                            </span>
                                </div>
                            </div>
                            <div class="group">
                                <span class="short__name"></span>
                                <i class="tio-add iocn__plus -arrwo"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseFive-text" class="collapse" aria-labelledby="headingFive-text"
                         data-parent="#accordionExample5">
                        <div class="card-body">
                            <p class="mb-0 size-15 color-text">
                                You can make mobile websites or progressive web apps for mobile devices.
                            </p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- End. emPage___profile  -->

    </section>
@endsection
