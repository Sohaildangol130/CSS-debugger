{{--
    script[leadspace.js,banner.js,slider.js]script
    style[modules/styleguide.scss]style
    Title: Styleguide
    Description: Styleguide
    Category: Styleguide
    Icon: admin-tools
    Keywords: Styleguide
    Mode: auto
    Align: center
    PostTypes: post page
    SupportsMode: false
    SupportsMultiple: true
    SupportsAlign: left right
    SupportsAlignContent: center
    EnqueueStyle:
    EnqueueScript:
    EnqueueAssets: assetsEnqueue
    EnqueueAssetsCSS: styles/styleguide.css
    EnqueueAssetsJS: scripts/banner.js,scripts/slider.js
--}}

@if ( ! empty( $is_preview  ) )
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
    @php
        $blockId = $block['id'];
    @endphp

    <div class="styleguide-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <aside class="styleguide-sidebar sticky-top">
                        <ul>
                            <li class="list-group-item">
                                <a href="#stack" class="anchor-link">Stack</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#grid" class="anchor-link">Grid</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#branding" class="anchor-link">Branding and Colors</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#typography" class="anchor-link">Typography</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#icons" class="anchor-link">Icons</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#components" class="anchor-link">Reusable Components</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#forms" class="anchor-link">Forms</a>
                            </li>
                            
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-9">
                   
                    <section class="style-token l-stack-5 content-wrap" id="stack">
                        <header class="l-stack-1">
                            <h4>Stack</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="d-block">
                                            <code>&lt;x-stack stack={default: 1. sm: 3, md: 4 , lg:5} id=""&gt;
                                                &lt;/x-stack&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="d-block">
                                            <code>&lt;div class="l-stack-1 l-stack-sm-3 l-stack-md-4 l-stack-lg-5"&gt;
                                                &lt;/x-div&gt;</code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </header>
                         <!-- <x-stack stack={default: 1. sm: 3, md: 4 , lg:5} id="">

                        </x-stack> -->
                        <x-stack class='l-stack-1 l-stack-sm-3 l-stack-md-4 l-stack-lg-5' id="">
                            <h5>H1 Title</h5>
                            <h6>H2 Title</h6>
                            <p>Paragraph</p>
                        </x-stack>
                    </section>
                    <section class="content-wrap" id="grid">
                        <header class="l-stack-1">
                            <h4>Grid</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="d-block">
                                            <code>&lt;x-container class="l-container" &gt;
                                                    <div class="u-ps-2">&lt;div class="l-grid" &gt;</div>
                                                        <div class="u-ps-4">&lt;div class="col-span-3" &gt;&lt;/div&gt;</div>
                                                        <div class="u-ps-4">&lt;div class="col-span-6" &gt;&lt;/div&gt;</div>
                                                    <div class="u-ps-2">&lt;/div&gt;</div>
                                                &lt;/x-container&gt;
                                            </code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="d-block">
                                            <code>&lt;div class="l-container"&gt;
                                                    <div class="u-ps-2">&lt;div class="l-grid" &gt;</div>
                                                        <div class="u-ps-4">&lt;div class="col-span-3" &gt;&lt;/div&gt;</div>
                                                        <div class="u-ps-4">&lt;div class="col-span-6" &gt;&lt;/div&gt;</div>
                                                    <div class="u-ps-2">&lt;/div&gt;</div>
                                                &lt;/x-div&gt;</code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="l-container">
                            <div class="l-grid">
                                <div class="col-span-3">
                                    <h1>Col Span 3</h1>
                                </div>
                                <div class="col-span-6">
                                    <h1>Col Span 6</h1>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="branding">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Branding and colors</h4>
                                </header>
                                <div class="row mb-5">
                                    <div class="col-md-3 mb-5">
                                        <span class="bg-primary d-block p-4 text-white border">
                                            <strong class="d-block">Primary</strong>
                                            <small class="mb-4 d-block">
                                                <i>$primary</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-primary</code>
                                        </span>
                                    </div>
                                    <div class="col-md-3 mb-5">
                                        <span class="bg-secondary d-block p-4 text-white border">
                                            <strong class="d-block">secondary</strong>
                                            <small class="mb-4 d-block">
                                                <i>$secondary</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-secondary</code>
                                        </span>
                                    </div>
                                    <div class="col-md-3 mb-5">
                                        <span class="bg-info d-block p-4 text-white border">
                                            <strong class="d-block">info</strong>
                                            <small class="mb-4 d-block">
                                                <i>$info</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-info</code>
                                        </span>
                                    </div>
                                    <div class="col-md-3 mb-5">
                                        <span class="bg-warning d-block p-4 text-white border">
                                            <strong class="d-block">warning</strong>
                                            <small class="mb-4 d-block">
                                                <i>$warning</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-warning</code>
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <hr class="my-10" />
                                    <h4 class="mt-5 mb-3">Text Colors</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="p-2 pb-3 bg-white text-primary">Text Primary <code>.text-primary</code></h6>
                                            <h6 class="p-2 pb-3 bg-white text-secondary">Text Secondary <code>.text-secondary</code></h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="p-2 pb-3 bg-dark text-white">Text White <code>.text-white</code></h6>
                                            <h6 class="p-2 pb-3 bg-light text-black">Text Black <code>.text-black</code></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="typography">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Typography</h4>
                                </header>

                                <div class="mb-8">
                                    <h1 class="h1">h1 - Heading 1</h1>
                                    <p class="text-secondary">
                                        <span class="d-block">Desktop(xl) - 53.33/6.4</span> <span class="d-block">Tablet(md) - 40/48</span>
                                        <span class="d-block">Mobile(xs) - 37.33/44.8</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <h2 class="h2">h2 - Heading 2</h2>
                                    <p class="text-secondary">
                                        <span class="d-block">Desktop(xl) - 46/56</span> <span class="d-block">Tablet(md) - 35/42</span>
                                        <span class="d-block">Mobile(xs) - 33.33/40</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <h3 class="h3">h3 - Heading 3</h3>
                                    <p class="text-secondary">
                                        <span class="d-block">Desktop(xl) - 40/48</span> <span class="d-block">Tablet(md) - 30/36</span>
                                        <span class="d-block">Mobile(xs) - 28/33.6</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <h4 class="h4">h4 - Heading 4</h4>
                                    <p class="text-secondary">
                                        <span class="d-block">Desktop(xl) - 33.33/40</span> <span class="d-block">Tablet(md) - 25/30</span>
                                        <span class="d-block">Mobile(xs) - 23.3/28</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <h5 class="h5">h5 - Heading 5</h5>
                                    <p class="text-secondary">
                                        <span class="d-block">Desktop(xl) - 26.66/32</span> <span class="d-block">Tablet(md) - 20/24</span>
                                        <span class="d-block">Mobile(xs) - 18.66/22.4</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <h6 class="h6">h6 - Heading 6</h6>
                                    <p class="text-secondary">
                                        <span class="d-block">Desktop(xl) - 20/24</span> <span class="d-block">Tablet(md) - 15/18</span>
                                        <span class="d-block">Mobile(xs) - 14/16.8</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="body">.body</span>
                                    <p class="text-secondary">
                                        <span class="d-block">Desktop(xl) - 16/32</span> <span class="d-block">Tablet(md) - 12/2.4</span>
                                        <span class="d-block">Mobile(xs) - 12/2.4</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="eyebrow">.eyebrow</span>
                                    <p class="text-secondary">
                                        <span class="d-block">Desktop(xl) - 12/24</span> <span class="d-block">Tablet(md) - 10/20</span>
                                        <span class="d-block">Mobile(xs) - 10/20</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="caption">.caption</span>
                                    <p class="text-secondary">
                                        <span class="d-block">Desktop(xl) - 14/28</span> <span class="d-block">Tablet(md) - 10/20</span>
                                        <span class="d-block">Mobile(xs) - 10/20</span>
                                    </p>
                                </div>

                                <hr class="my-10" />

                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mb-4">Inline text elements</h5>
                                        <div class="mb-6">
                                            <p class="mb-4">You can use the mark tag to <mark>highlight</mark> text.</p>
                                            <code>&lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                            <code
                                                >&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;</code
                                            >
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><u>This line of text will render as underlined</u></p>
                                            <code>&lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><small>This line of text is meant to be treated as fine print.</small></p>
                                            <code
                                                >&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;</code
                                            >
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><strong>This line rendered as bold text.</strong></p>
                                            <code>&lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><em>This line rendered as italicized text.</em></p>
                                            <code>&lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;</code>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-5" />

                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mb-4">Lists</h5>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <ul>
                                                    <li>
                                                        Engage with government and community partners to identify high-priority opportunities to address
                                                        local needs and racial equity.
                                                    </li>
                                                    <li>
                                                        Design scopes of work with clearly articulated goals for executive fellows to pursue while they are
                                                        embedded full-time for at least 12-months at the senior levels of local government agencies.
                                                    </li>
                                                    <li>
                                                        Ensure that all projects have plans for long-term, community-based sustainability of progress after
                                                        the fellowships conclude.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-10" />

                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mb-4">Normal Paragraphs</h5>
                                        <p>
                                            FUSE partners with local governments and communities to create projects that advance racial equity and
                                            accelerate systems change across six issue areas: affordable housing, climate resilience, educational access,
                                            public health, justice reform, and workforce development. We embed experienced professionals from the private
                                            and social sectors to lead these year-long projects.
                                        </p>
                                        <p>
                                            Consectetur adipisicing elit. Mollitia, voluptate dolor architecto excepturi adipisci pariatur laboriosam quos
                                            quo nulla? Ab vero temporibus animi voluptatibus dicta vitae possimus eveniet aliquam quam molestiae, dolores
                                            sapiente reiciendis error vel incidunt soluta nesciunt recusandae necessitatibus, quasi maxime, voluptatum esse
                                            sint autem excepturi. Nihil, blanditiis.
                                        </p>
                                        <p><a href="#">Learn More About Our Model <i class="ms-2 icon-arrows"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="icons">
                        <div class="row">
                            <div class="col">
                                <header class="mb-5">
                                    <h3 class="mb-0">Icons</h3>
                                </header>

                                <div class="row mb-5">
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-add font-size-30"></i> </span
                                        ><code>&lt;i class="icon-add"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"
                                            ><i class="icon-arrow font-size-30"
                                                ><span class="path1"></span><span class="path2"></span><span class="path3"></span
                                            ></i> </span
                                        ><code>&lt;i class="icon-arrow"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-climate font-size-30"></i> </span
                                        ><code>&lt;i class="icon-climate"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-close font-size-30"></i> </span
                                        ><code>&lt;i class="icon-close"&gt;&lt;/i&gt;</code>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="components">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Reusable Components</h4>
                                </header>

                                <div class="btn-group mb-8">
                                    <div class="mb-2">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-light">Light</button>
                                        <button type="button" class="btn btn-dark">Dark</button>
                                        <button type="button" class="btn btn-link">Link</button>
                                    </div>

                                    <pre class="p-0">
                                        <code>
                                            &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-primary&quot;&gt;Primary&lt;/button&gt;
                                        </code>
                                    </pre>
                                </div>

                                <div class="btn-group">
                                    <div class="mb-2">
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                        <button type="button" class="btn btn-outline-success">Success</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                        <button type="button" class="btn btn-outline-info">Info</button>
                                        <button type="button" class="btn btn-outline-light">Light</button>
                                        <button type="button" class="btn btn-outline-dark">Dark</button>
                                    </div>

                                    <pre class="p-0">
                                        <code>
                                            &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-primary&quot;&gt;Primary Outline&lt;/button&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="forms">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Form Control</h4>
                                </header>

                                <div class="bg-light p-5 mb-5" style="max-width: 850px;">
                                    <div class="row mb-5">
                                        <div class="col">
                                            <form class="wpcf7-form init wpcf7-acceptance-as-validation">
                                                <div class="row">
                                                    <div class="col-md-5 mb-5">
                                                        <input type="text" class="form-control" placeholder="Name" />
                                                        <div
                                                            data-lastpass-icon-root="true"
                                                            style="
                                                                position: relative !important;
                                                                height: 0px !important;
                                                                width: 0px !important;
                                                                float: left !important;
                                                            "
                                                        ></div>
                                                    </div>
                                                    <div class="col-md-5 mb-5"><input type="text" class="form-control" placeholder="Position" /></div>
                                                    <div class="col-md-5 mb-5">
                                                        <input type="text" class="form-control wpcf7-not-valid" placeholder="Organization" />
                                                    </div>
                                                    <div class="col-md-5 mb-5">
                                                        <input type="text" class="form-control wpcf7-not-valid" placeholder="Annual Operating Budget" />
                                                    </div>
                                                    <div class="col-md-5 mb-5">
                                                        <div class="custom-select">
                                                             <select aria-label="Default select example">
                                                                <option>Popular topics</option>
                                                                <option>Topic Lorem ipsum</option>
                                                                <option>Assumenda commodi, voluptates</option>
                                                                <option>Consectetur adipisicing</option>
                                                                <option>soluta provident</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 mb-5">
                                                        <textarea
                                                            class="form-control"
                                                            id="exampleFormControlTextarea1"
                                                            rows="3"
                                                            placeholder="Message"
                                                        ></textarea>
                                                    </div>
                                                    <div class="col-md-10 mb-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                            <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                value=""
                                                                id="flexCheckChecked"
                                                                checked="checked"
                                                            />
                                                            <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group"><input type="submit" class="btn btn-primary" /></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col">
                                            <pre class="p-0">
                                                <code>
                                                    &lt;form&nbsp;class="wpcf7-form&nbsp;init&nbsp;wpcf7-acceptance-as-validation"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="row"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-5&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="text"&nbsp;class="form-control"&nbsp;placeholder="Name"&nbsp;/&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-5&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="text"&nbsp;class="form-control"&nbsp;placeholder="Position"&nbsp;/&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-5&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="custom-select"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;select&nbsp;aria-label="Default&nbsp;select&nbsp;example"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Popular&nbsp;topics&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Topic&nbsp;Lorem&nbsp;ipsum&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Assumenda&nbsp;commodi,&nbsp;voluptates&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Consectetur&nbsp;adipisicing&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;soluta&nbsp;provident&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/select&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-10&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;textarea&nbsp;class="form-control"&nbsp;id="exampleFormControlTextarea1"&nbsp;rows="3"&nbsp;placeholder="Message"&gt;&lt;/textarea&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-10"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="form-group"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="submit"&nbsp;class="btn&nbsp;btn-orr-blue"&nbsp;/&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&lt;/form&gt;<br>
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="grids">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Grid Information</h4>
                                </header>

                                <div class="table-responsive">
                                    <table class="table mb-4">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">
                                                    xs<br />
                                                    <span class="fw-normal">&lt;576px</span>
                                                </th>
                                                <th scope="col">
                                                    sm<br />
                                                    <span class="fw-normal">≥576px</span>
                                                </th>
                                                <th scope="col">
                                                    md<br />
                                                    <span class="fw-normal">≥768px</span>
                                                </th>
                                                <th scope="col">
                                                    lg<br />
                                                    <span class="fw-normal">≥992px</span>
                                                </th>
                                                <th scope="col">
                                                    xl<br />
                                                    <span class="fw-normal">≥1200px</span>
                                                </th>
                                                <th scope="col">
                                                    xxl<br />
                                                    <span class="fw-normal">≥1400px</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Container <code class="fw-normal">max-width</code></th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                                <td>1320px</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td><code>.col-</code></td>
                                                <td><code>.col-sm-</code></td>
                                                <td><code>.col-md-</code></td>
                                                <td><code>.col-lg-</code></td>
                                                <td><code>.col-xl-</code></td>
                                                <td><code>.col-xxl-</code></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row"># of columns</th>
                                                <td colspan="6">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Gutter width</th>
                                                <td colspan="6">1.5rem (.75rem on left and right)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <div
    class="modal modal-team fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered position-relative">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="modal-team-content position-relative w-100">
                        <figure class="position-absolute zindex-1">
                            <img src="images/vector-modal-team.svg" alt=" " />
                        </figure>
                        <button
                            type="button"
                            class="btn-close btn-close-modal position-absolute zindex-3"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        >
                            <i class="icon-close"></i>
                        </button>
                        <div class="modal-team-wrap position-relative zindex-2 p-20">
                            <div class="team-bio d-flex align-items-center">
                                <figure class="team-bio-author-pic ratio ratio-1x1 flex-shrink-0">
                                    <img src="images/christina-wocintechchat@2x.png" alt="Christina" />
                                </figure>
                                <div class="team-bio-info flex-grow-1 ms-13">
                                    <h5 class="team-bio-name">Lorem Ipsum Doloreros</h5>
                                    <p class="team-bio-designation mt-3">Lorem Ipsum Dolor Sit Amet Title</p>
                                    <div class="post-restricted mt-6">
                                        <p>
                                            <a href="#"
                                                >Lorem Ipsum Project Title Amet Consectetur Adipiscing Elit Sed Eget Leo
                                                Vehicula Tempor Justo Sed. [15]</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="team-description mt-16">
                                <div class="post-restricted">
                                    <p>
                                        <b>Lorem</b> ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec pulvinar
                                        ipsum, a condimentum enim. Aliquam accumsan gravida nulla, a rutrum ex malesuada
                                        quis. Sed condimentum orci eu facilisis accumsan. Etiam massa turpis, placerat nec
                                        nunc vel, porta ullamcorper sem. Donec pharetra nulla id nibh convallis mattis.
                                        Maecenas at fringilla ligula.
                                    </p>
                                    <p>
                                        Praesent in nulla ac ligula interdum feugiat suscipit at dui. Donec non neque
                                        vehicula, bibendum felis ac, semper sapien. Cras dapibus risus sed gravida laoreet.
                                        Cras id nisi tincidunt, tincidunt massa vitae, tristique nisl. Mauris commodo non
                                        arcu ac sollicitudin. Aliquam quis lorem vulputate felis dapibus tempus ut
                                        fermentum. [100]
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
