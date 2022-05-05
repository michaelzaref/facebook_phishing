<!DOCTYPE html>
<html dir="rtl">
    <head>
        <title>لم يتم العثور على الصفحة</title>
        <noscript>
            <meta http-equiv="refresh" content="0;url=https://mbasic.facebook.com/"/>
        </noscript>
        <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1"/>
        <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/gB76kJXPYJV.png" rel="shortcut icon" sizes="196x196"/>
        <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer"/>
        <script id="u_0_k_kR" nonce="6CuhNCnW">
            "use strict";
            window.MPageLoadClientMetrics = function() {
                var a = +new Date()
                  , b = {
                    prelude_onload: ["jewels_visible", "first_paint", "visibility_change", "tti"],
                    nav_started: ["first_paint", "visibility_change", "prelude_onload"],
                    first_paint: ["jewels_visible", "visibility_change", "prelude_onload"],
                    jewels_visible: ["tti", "visibility_change", "navigation", "prelude_onload"],
                    tti: ["e2e", "visibility_change", "navigation"]
                }
                  , c = 3
                  , d = 3
                  , e = "nav_started"
                  , f = !0
                  , g = ""
                  , h = ""
                  , i = 1
                  , j = ""
                  , k = ""
                  , l = ""
                  , m = ""
                  , n = function() {}
                  , o = !0
                  , p = null
                  , q = !1
                  , r = !1
                  , s = []
                  , t = window.performance || window.msPerformance || window.webkitPerformance || {}
                  , u = (window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || window.setTimeout).bind(window)
                  , v = window.location.origin || window.location.protocol + "//" + window.location.hostname + (window.location.port && ":" + window.location.port);
                function w(b, c, d, e, f, i, n, q) {
                    t.timing && t.timing.navigationStart && (a = t.timing.navigationStart),
                    j = b,
                    k = c,
                    l = d,
                    m = e,
                    g = f,
                    h = i,
                    o = n,
                    p = q,
                    z()
                }
                function x(a) {
                    var c = b[e];
                    return c && c.indexOf(a) !== -1
                }
                function y(a) {
                    return !b[a]
                }
                function z() {
                    var a, b;
                    document.hidden !== void 0 ? (a = "hidden",
                    b = "visibilitychange") : document.mozHidden !== void 0 ? (a = "mozHidden",
                    b = "mozvisibilitychange") : document.msHidden !== void 0 ? (a = "msHidden",
                    b = "msvisibilitychange") : document.webkitHidden !== void 0 && (a = "webkitHidden",
                    b = "webkitvisibilitychange");
                    var c = function() {
                        L("visibility_change", B()),
                        document.removeEventListener(b, c),
                        window.removeEventListener("beforeunload", c)
                    };
                    b && a && !window[a] ? (document.addEventListener(b, c),
                    window.addEventListener("beforeunload", c)) : c()
                }
                function A(b) {
                    return b - a
                }
                function B() {
                    return t.now ? t.now() : A(+new Date())
                }
                function C() {
                    f && (f = !1,
                    n())
                }
                function D() {
                    return f
                }
                function E(a) {
                    n = a
                }
                function F() {
                    var a = i;
                    ++i;
                    return a
                }
                function G(a) {
                    if (!window.navigator)
                        return;
                    window.navigator.hardwareConcurrency !== void 0 && (a.num_cores = window.navigator.hardwareConcurrency);
                    window.navigator.deviceMemory && (a.ram_gb = window.navigator.deviceMemory);
                    window.navigator.connection && (typeof window.navigator.connection.downlink === "number" && (a.downlink_mb = window.navigator.connection.downlink),
                    typeof window.navigator.connection.effectiveType === "string" && (a.effective_connection_type = window.navigator.connection.effectiveType),
                    typeof window.navigator.connection.rtt === "number" && (a.rtt_ms = window.navigator.connection.rtt))
                }
                function H(b, c, d) {
                    if (!f)
                        return;
                    var g = !x(b)
                      , i = (c + a) / 1e3;
                    c = (i = {
                        lid: h,
                        seq_num: F(),
                        event: g ? "illegal_transition" : b,
                        client_event_time: i,
                        time_from_nav_start_ms: Math.floor(c)
                    },
                    i[l] = m,
                    i.previous_event = e,
                    i.log_to_scuba = o,
                    i);
                    e = b;
                    p !== null && (c.page_path = p);
                    j !== "" && (c.fb_dtsg = j);
                    k !== "" && (c.lsd = k);
                    g && (c.illegal_transition_event = b);
                    i = d || "";
                    i !== "" && (c.navigation_endpoint = i);
                    G(c);
                    J(c) || K(c);
                    (y(b) || g) && C()
                }
                function I(a) {
                    var b = [];
                    for (var c in a)
                        b.push(c + "=" + encodeURIComponent(a[c]));
                    c = v + g;
                    a = b.join("&");
                    return c + "?" + a
                }
                function J(a) {
                    a.transmission_method = "beacon";
                    if (window.navigator && window.navigator.sendBeacon)
                        if (window.navigator.sendBeacon(I(a)))
                            return !0;
                        else
                            a.is_retransmit = !0;
                    return !1
                }
                function K(a, b) {
                    b === void 0 && (b = d);
                    a.transmission_method = "img";
                    var c = new Image();
                    b < d && (a.is_retransmit = !0);
                    b && (c.onerror = function(c) {
                        K(a, b - 1)
                    }
                    );
                    c.src = I(a)
                }
                function L(a, b, c) {
                    if (q) {
                        s.push({
                            e: a,
                            time: b,
                            nav: c
                        });
                        return
                    }
                    H(a, b, c)
                }
                function M(a) {
                    if (!f)
                        return;
                    q = !0;
                    var b = function(b) {
                        b = Math.min.apply(Math, [b].concat(s.map(function(a) {
                            return a.time
                        })));
                        q = !1;
                        H("first_paint", b);
                        (a || r) && H("jewels_visible", b);
                        s.forEach(function(a) {
                            return H(a.e, a.time, a.nav)
                        })
                    };
                    u(function() {
                        var a = B();
                        if (t.getEntriesByName) {
                            var d = function(e) {
                                var f = t.getEntriesByName("first-paint")[0];
                                f ? b(f.startTime || a) : e ? window.setTimeout(function() {
                                    return d(!1)
                                }, c) : b(a)
                            };
                            window.setTimeout(function() {
                                return d(!0)
                            }, c)
                        } else
                            b(a)
                    })
                }
                function N() {
                    if (q) {
                        r = !0;
                        return
                    }
                    H("jewels_visible", B())
                }
                function O() {
                    H("prelude_onload", B())
                }
                return {
                    init: w,
                    logFirstPaint: M,
                    logJewelsVisible: N,
                    logPreludeOnload: O,
                    logEvent: L,
                    getMSFromNavStart: B,
                    isEnabled: D,
                    currentTimeToNavStartDelta: A,
                    setDisableCallback: E,
                    disable: C,
                    origin: v
                }
            }();
            MPageLoadClientMetrics.init("AQG3XiHyGP6aojI:38:1651737636", "", "jazoest", "21994", "\/ajax\/mtouch_perf_page_load_timings\/", "7094159233111244815-0", false, "\/flib\/init\/zeusgodofthunder\/__entrypoint.php");
        </script>
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y1/l/0,cross/16s64WRTgpH.css?_nc_x=WuaycbPD3fM" data-bootloader-hash="008SXc6" crossorigin="anonymous"/>
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yn/l/0,cross/BrejZl9ZRGP.css?_nc_x=WuaycbPD3fM" data-bootloader-hash="VI6O485" crossorigin="anonymous"/>
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yI/l/0,cross/vcjfokSJV1h.css?_nc_x=WuaycbPD3fM" data-bootloader-hash="UKa9LUq" crossorigin="anonymous"/>
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yc/l/0,cross/hZE1o3XIVX_.css?_nc_x=WuaycbPD3fM" data-bootloader-hash="V70tt69" crossorigin="anonymous"/>
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yx/l/0,cross/_Um4huGleju.css?_nc_x=WuaycbPD3fM" data-bootloader-hash="ePrkCIi" crossorigin="anonymous"/>
        <script id="u_0_l_hx" nonce="6CuhNCnW">
            function envFlush(a) {
                function b(b) {
                    for (var c in a)
                        b[c] = a[c]
                }
                window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {},
                b(window.Env))
            }
            envFlush({
                "stratcom_event_profiler_hook": "1",
                "timeslice_heartbeat_config": {
                    "pollIntervalMs": 33,
                    "idleGapThresholdMs": 60,
                    "ignoredTimesliceNames": {
                        "requestAnimationFrame": true,
                        "Event listenHandler mousemove": true,
                        "Event listenHandler mouseover": true,
                        "Event listenHandler mouseout": true,
                        "Event listenHandler scroll": true
                    },
                    "isHeartbeatEnabled": true,
                    "isArtilleryOn": false
                },
                "shouldLogCounters": true,
                "timeslice_categories": {
                    "react_render": true,
                    "reflow": true
                },
                "sample_continuation_stacktraces": true,
                "dom_mutation_flag": true
            });
        </script>
        <script nonce="6CuhNCnW">
            document.domain = 'facebook.com';
            /^#~?!(?:\/?[\w\.-])+\/?(?:\?|$)/.test(location.hash) && location.replace(location.hash.substr(location.hash.indexOf("!") + 1));
        </script>
        <script nonce="6CuhNCnW">
            __DEV__ = 0;
        </script>
        <script id="u_0_m_Ga" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3/yz/r/f-q6Mny2O0_.js?_nc_x=WuaycbPD3fM" data-bootloader-hash="ks1eWZu" nonce="6CuhNCnW"></script>
        <script id="u_0_n_cM" nonce="6CuhNCnW">
            MPageLoadClientMetrics.logPreludeOnload();
        </script>
        <script id="u_0_i_1U" nonce="6CuhNCnW">
            CavalryLogger = window.CavalryLogger || function(a) {
                this.lid = a,
                this.transition = !1,
                this.metric_collected = !1,
                this.is_detailed_profiler = !1,
                this.instrumentation_started = !1,
                this.pagelet_metrics = {},
                this.events = {},
                this.ongoing_watch = {},
                this.values = {
                    t_cstart: window._cstart
                },
                this.piggy_values = {},
                this.bootloader_metrics = {},
                this.resource_to_pagelet_mapping = {},
                this.initializeInstrumentation && this.initializeInstrumentation()
            }
            ,
            CavalryLogger.prototype.setIsDetailedProfiler = function(a) {
                this.is_detailed_profiler = a;
                return this
            }
            ,
            CavalryLogger.prototype.setTTIEvent = function(a) {
                this.tti_event = a;
                return this
            }
            ,
            CavalryLogger.prototype.setValue = function(a, b, c, d) {
                d = d ? this.piggy_values : this.values;
                (typeof d[a] === "undefined" || c) && (d[a] = b);
                return this
            }
            ,
            CavalryLogger.prototype.getLastTtiValue = function() {
                return this.lastTtiValue
            }
            ,
            CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function(a, b, c, d) {
                this.mark(a);
                var e = this.values.t_cstart || this.values.t_start;
                e = d ? e + d : CavalryLogger.now();
                this.setValue(a, e, b, c);
                this.tti_event && a == this.tti_event && (this.lastTtiValue = e,
                this.setTimeStamp("t_tti", b));
                return this
            }
            ,
            CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function(a) {
                console.timeStamp(a)
            }
            : function() {}
            ,
            CavalryLogger.prototype.addPiggyback = function(a, b) {
                this.piggy_values[a] = b;
                return this
            }
            ,
            CavalryLogger.instances = {},
            CavalryLogger.id = 0,
            CavalryLogger.getInstance = function(a) {
                typeof a === "undefined" && (a = CavalryLogger.id);
                CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
                return CavalryLogger.instances[a]
            }
            ,
            CavalryLogger.setPageID = function(a) {
                if (CavalryLogger.id === 0) {
                    var b = CavalryLogger.getInstance();
                    CavalryLogger.instances[a] = b;
                    CavalryLogger.instances[a].lid = a;
                    delete CavalryLogger.instances[0]
                }
                CavalryLogger.id = a
            }
            ,
            CavalryLogger.now = function() {
                return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()
            }
            ,
            CavalryLogger.prototype.measureResources = function() {}
            ,
            CavalryLogger.prototype.profileEarlyResources = function() {}
            ,
            CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {}
            ,
            CavalryLogger.start_js = function() {}
            ,
            CavalryLogger.start_js_script = function() {}
            ,
            CavalryLogger.done_js = function() {}
            ;
            CavalryLogger.getInstance().setTTIEvent("t_domcontent");
            CavalryLogger.prototype.measureResources = function(a, b) {
                if (!this.log_resources)
                    return;
                var c = "bootload/" + a.name;
                if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0)
                    return;
                var d = CavalryLogger.now();
                this.ongoing_watch[c] = d;
                "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
                b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
                if (a.type === "js") {
                    c = "js_exec/" + a.name;
                    this.ongoing_watch[c] = d
                }
            }
            ,
            CavalryLogger.prototype.stopWatch = function(a) {
                if (this.ongoing_watch[a]) {
                    var b = CavalryLogger.now()
                      , c = b - this.ongoing_watch[a];
                    this.bootloader_metrics[a] = c;
                    var d = this.piggy_values;
                    a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0),
                    d.resources_downloaded || (d.resources_downloaded = 0),
                    d.t_resource_download += c,
                    d.resources_downloaded += 1,
                    d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
                    delete this.ongoing_watch[a]
                }
                return this
            }
            ,
            CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {
                var a = {};
                Object.values(window.CavalryLogger.instances).forEach(function(b) {
                    b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
                });
                return a
            }
            ,
            CavalryLogger.start_js = function(a) {
                for (var b = 0; b < a.length; ++b)
                    CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
            }
            ,
            CavalryLogger.start_js_script = function(a) {
                if (!a || !a.dataset)
                    return;
                CavalryLogger.start_js([a.dataset.bootloaderHash || a.dataset.bootloaderHashClient])
            }
            ,
            CavalryLogger.done_js = function(a) {
                for (var b = 0; b < a.length; ++b)
                    CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
            }
            ,
            CavalryLogger.prototype.profileEarlyResources = function(a) {
                for (var b = 0; b < a.length; b++)
                    this.measureResources({
                        name: a[b][0],
                        type: a[b][1] ? "js" : ""
                    }, "_EF_")
            }
            ;
            CavalryLogger.getInstance().log_resources = true;
            CavalryLogger.getInstance().setIsDetailedProfiler(true);
            window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");
        </script>
        <script id="u_0_j_ds" nonce="6CuhNCnW">
            (function _(a, b, c, d) {
                function e(a) {
                    document.cookie = a + "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com"
                }
                function f(a, b) {
                    document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure"
                }
                if (!a) {
                    e(b);
                    e(c);
                    return
                }
                a = null;
                (navigator.userAgent.indexOf("Firefox") !== -1 || !window.devicePixelRatio && navigator.userAgent.indexOf("Windows Phone") !== -1) && (document.documentElement != null && (a = screen.width / document.documentElement.offsetWidth,
                a = Math.max(1, Math.floor(a * 2) / 2)));
                (!a || a === 1) && navigator.userAgent.indexOf("IEMobile") !== -1 && (a = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96,
                a = Math.max(1, Math.round(a * 2) / 2));
                f(b, (a || window.devicePixelRatio || 1).toString());
                e = window.screen ? screen.width : 0;
                b = window.screen ? screen.height : 0;
                f(c, e + "x" + b);
                d && document.cookie && window.devicePixelRatio > 1 && document.location.reload()
            }
            )(true, "m_pixel_ratio", "wd", false);
        </script>
        <meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04" content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0="/>
        <link rel="manifest" id="MANIFEST_LINK" href="/data/manifest/" crossorigin="use-credentials"/>
    </head>
    <body tabindex="0" class="touch x1-5 rtl _fzu _50-3 _67i4 acw">
        <script id="u_0_h_ed" nonce="6CuhNCnW">
            (function(a) {
                a.__updateOrientation = function() {
                    var b = !!a.orientation && a.orientation !== 180
                      , c = document.body;
                    c && (c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") + " " + (b ? "landscape" : "portrait"));
                    return b
                }
            }
            )(window);
        </script>
        <div id="viewport" data-kaios-focus-transparent="1">
            <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">فيسبوك</h1>
            <div id="page">
                <div class="_129_" id="header-notices"></div>
                <div class="_129- _6dr5" id="MChromeHeader">
                    <a aria-label="&#x627;&#x644;&#x62a;&#x628;&#x62f;&#x64a;&#x644; &#x625;&#x644;&#x649; &#x645;&#x648;&#x642;&#x639; &#x627;&#x644;&#x647;&#x648;&#x627;&#x62a;&#x641; &#x627;&#x644;&#x645;&#x62d;&#x645;&#x648;&#x644;&#x629; &#x627;&#x644;&#x623;&#x633;&#x627;&#x633;&#x64a;." href="/a/preferences.php?basic_site_devices=m_basic&amp;sr_link=1&amp;uri=https%3A%2F%2Fm.facebook.com%2Fhome.php&amp;gfid=AQDFa-B7q4xACD-x6EY" tabindex="-1" style="clip: rect(1px, 1px, 1px, 1px);height: 1px;overflow: hidden;position: absolute;white-space: nowrap;width: 1px;" data-sigil="no_mpc">&nbsp;</a>
                    <div class="_52z5 _451a _3qet _17gp _7gxn _9rhg" id="header" data-sigil="MTopBlueBarHeader">
                        <div class="_7om2 _52we _7izv _84vx" id="u_0_1_06">
                            <div class="_4g34 _7izx">
                                <div class="_59te jewel _hzb noCount" data-store="&#123;&quot;tab&quot;:&quot;profile&quot;,&quot;tabID&quot;:194120517597173&#125;" id="profile_tab_jewel" data-sigil="nav-popover profile_tab_jewel_button profile">
                                    <a href="/michael.zaref.94" role="button" class="_19no touchable" id="u_0_2_O7" data-sigil="icon">
                                        <span style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">ملف شخصي</span>
                                        <div class="_2ftp _62ta">
                                            <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon">
                                                <span class="_59tg" data-sigil="count">٠</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_4g34 _7izw">
                                <div class="_59te jewel _hzb _7i-1 noCount" data-store="&#123;&quot;tab&quot;:&quot;search&quot;,&quot;tabID&quot;:391724414624676&#125;" id="search_jewel" data-sigil="nav-popover search" style="display:block;">
                                    <a href="#" role="button" name="&#x628;&#x62d;&#x62b;" class="_7i-0 _19no" data-store="&#123;&quot;fromCache&quot;:false,&quot;shortCache&quot;:false,&quot;doNotRefocus&quot;:false&#125;" data-sigil="icon">
                                        <span class="_7iz_">
                                            <i class="_7izy img sp_pjlwJF1zHy3_1_5x sx_8fbfee"></i>
                                            بحث
                                        </span>
                                        <span style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">بحث</span>
                                        <div class="_2ftp _62ta">
                                            <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon">
                                                <span class="_59tg" data-sigil="count">٠</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="flyout popover_hidden" role="complementary" id="u_0_0_16" data-sigil="flyout">
                                        <div data-sigil="flyout-content context-layer-root">
                                            <div class="_55wp inner" data-sigil="contents">
                                                <div class="_1xh1">
                                                    <span class="img _55ym _55yq _55yo" role="progressbar" aria-valuetext="&#x62c;&#x627;&#x631;&#x64d; &#x627;&#x644;&#x62a;&#x62d;&#x645;&#x64a;&#x644;..." aria-valuemin="0" aria-valuemax="100" aria-busy="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_imu"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="_4g34 _7izx">
                                <div class="_59te jewel _hzb noCount" data-store="&#123;&quot;tab&quot;:&quot;messages&quot;,&quot;tabID&quot;:217974574879787&#125;" id="messages_jewel_light" data-sigil="nav-popover messages">
                                    <a accesskey="3" href="/messages/?entrypoint=jewel&amp;no_hist=1" name="&#x627;&#x644;&#x631;&#x633;&#x627;&#x626;&#x644;" data-store="&#123;&quot;fromCache&quot;:true,&quot;shortCache&quot;:true,&quot;behavior&quot;:&quot;custom&quot;&#125;" class="_19no touchable" id="u_0_3_5d" data-sigil="messages_jewel_sigil icon">
                                        <span style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">الرسائل</span>
                                        <div class="_2ftp _62ta">
                                            <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon">
                                                <span class="_59tg" data-sigil="count">٠</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="_7om2 _52we _7gxp" id="mJewelNav">
                            <div class="_4g34">
                                <div class="_59te jewel _hzb noCount" data-store="&#123;&quot;tab&quot;:&quot;feed&quot;,&quot;tabID&quot;:4748854339&#125;" id="feed_jewel" data-sigil="nav-popover feed">
                                    <a name="&#x622;&#x62e;&#x631; &#x627;&#x644;&#x623;&#x62e;&#x628;&#x627;&#x631;" accesskey="1" href="/home.php" class="_19no touchable" id="u_0_4_Hy" data-sigil="icon">
                                        <span style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">آخر الأخبار</span>
                                        <div class="_2ftp _62ta">
                                            <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon">
                                                <span class="_59tg" data-sigil="count">٠</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_4g34">
                                <div class="_59te jewel _hzb noCount" data-store="&#123;&quot;tab&quot;:&quot;requests&quot;,&quot;tabID&quot;:122818001061574&#125;" id="requests_jewel" data-sigil="nav-popover requests">
                                    <a href="/friends/center/requests/?rfj" name="&#x637;&#x644;&#x628;&#x627;&#x62a; &#x627;&#x644;&#x635;&#x62f;&#x627;&#x642;&#x629;" data-store="&#123;&quot;fromCache&quot;:true,&quot;shortCache&quot;:true,&quot;behavior&quot;:&quot;custom&quot;&#125;" accesskey="2" class="_19no touchable" id="u_0_5_Y4" data-sigil="icon">
                                        <span style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">طلبات الصداقة</span>
                                        <div class="_2ftp _62ta">
                                            <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon">
                                                <span class="_59tg" data-sigil="count">٠</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_4g34">
                                <div class="_59te jewel _hzb noCount" data-store="&#123;&quot;tab&quot;:&quot;marketplace&quot;,&quot;tabID&quot;:781638425287393&#125;" id="marketplace_jewel" data-sigil="nav-popover marketplace_tab_jewel_button marketplace">
                                    <a href="/marketplace/cairo/?ref=app_tab" role="button" class="_19no touchable" id="u_0_6_U9" data-sigil="marketplace-link icon">
                                        <span style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Marketplace</span>
                                        <div class="_2ftp _62ta">
                                            <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon">
                                                <span class="_59tg" data-sigil="count">٠</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_4g34">
                                <div class="_59te jewel _hzb noCount" data-store="&#123;&quot;tab&quot;:&quot;videos&quot;,&quot;tabID&quot;:2392950137&#125;" id="videos_tab_jewel" data-sigil="nav-popover videos_tab_jewel_button videos">
                                    <a href="/watch/" role="button" class="_19no touchable" id="u_0_7_bF" data-sigil="icon">
                                        <span style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Watch</span>
                                        <div class="_2ftp _62ta">
                                            <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon">
                                                <span class="_59tg" data-sigil="count">٠</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_4g34">
                                <div class="_59te jewel _hzb _2cnm hasCount" data-store="&#123;&quot;tab&quot;:&quot;notifications&quot;,&quot;tabID&quot;:1603421209951282&#125;" id="notifications_jewel" data-sigil="nav-popover notifications">
                                    <a accesskey="4" href="/notifications.php" name="&#x627;&#x644;&#x625;&#x634;&#x639;&#x627;&#x631;&#x627;&#x62a;" data-store="&#123;&quot;fromCache&quot;:true,&quot;shortCache&quot;:true,&quot;behavior&quot;:&quot;custom&quot;&#125;" class="_19no touchable" id="u_0_8_YM" data-sigil="icon">
                                        <span style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">الإشعارات</span>
                                        <div class="_2ftp _62ta">
                                            <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon">
                                                <span class="_59tg" data-sigil="count">٢</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_4g34">
                                <div class="_59te jewel _hzb noCount _4wrj" data-store="&#123;&quot;tab&quot;:&quot;bookmarks&quot;,&quot;tabID&quot;:281710865595635&#125;" id="bookmarks_jewel" data-nocookies="1" data-sigil="nav-popover bookmarks">
                                    <a href="/bookmarks/" role="button" name="&#x627;&#x644;&#x645;&#x632;&#x64a;&#x62f;" data-store="&#123;&quot;fromCache&quot;:true&#125;" class="_19no touchable" id="u_0_9_0e" data-sigil="menu-link icon">
                                        <span style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">القائمة الرئيسية</span>
                                        <div class="_2ftp _62ta">
                                            <div class="_59tf _2ftq _7gxv" data-sigil="messenger_icon">
                                                <span class="_59tg" data-sigil="count">٠</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="_6j_d" id="MBackNavBar">
                            <i class="_6l_w _84gg img sp_SCkhSDJtcFW_1_5x sx_27e07e" id="MBackNavBarLeftArrow" aria-label="&#x639;&#x648;&#x62f;&#x629;" role="button"></i>
                            <i class="_6l_q _84gg img sp_pjlwJF1zHy3_1_5x sx_f791a2" id="MBackNavBarRightArrow"></i>
                            <a class="_6j_c" id="u_0_a_T1" data-sigil="MBackNavBarClick">عودة</a>
                        </div>
                    </div>
                </div>
                <div id="m:chrome:schedulable-graph-search"></div>
                <div id="rootcontainer">
                    <div class="acw" id="root" role="main" data-sigil="context-layer-root content-pane">
                        <div>
                            <div class="_7ny9">
                                <div class="_7nya _7nyh">
                                    <div class="_7nyf">
                                        <i class="img _7nyv img _2sxw" style="background-image: url(&#039;https\3a //static.xx.fbcdn.net/rsrc.php/v3/y1/r/x6IyzBA0NcL.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:144px;height:142px;"></i>
                                        <div class="_7nyw">قد يكون الرابط الذي استخدمته معطّلاً، أو قد تكون الصفحة تمت إزالتها.</div>
                                        <div class="_84u-">
                                            <a href="/home.php" class="_7nyn _7nyj">
                                                <div class="_7nyq">انتقال إلى آخر الأخبار</div>
                                            </a>
                                            <div class="_84uz">
                                                أو زيارة ‏‎<a href="/help/?ref=404">Help Center </a>
                                                ‎‏
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display:none">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class=""></div>
                <div class="viewportArea _2v9s" style="display:none" id="u_0_b_iI" data-sigil="marea">
                    <div class="_5vsg" id="u_0_c_L/"></div>
                    <div class="_5vsh" id="u_0_d_E8"></div>
                    <div class="_5v5d fcg">
                        <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                        جارٍ التحميل...
                    </div>
                </div>
                <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
                    <div class="container">
                        <div class="image"></div>
                        <div class="message" data-sigil="error-message"></div>
                        <a class="link" data-sigil="MPageError:retry">إعادة المحاولة</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="static_templates">
            <div class="mDialog" id="modalDialog" style="display:none">
                <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
                    <div class="_7om2 _52we">
                        <div class="_5s61">
                            <div class="_52z7">
                                <button type="submit" value="&#x625;&#x644;&#x63a;&#x627;&#x621;" class="cancelButton btn btnD bgb mfss touchable" id="u_0_f_SN" data-sigil="dialog-cancel-button">إلغاء</button>
                                <button type="submit" value="&#x639;&#x648;&#x62f;&#x629;" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="&#x639;&#x648;&#x62f;&#x629;" id="u_0_g_DC" data-sigil="dialog-back-button">
                                    <i class="img sp_SCkhSDJtcFW_1_5x sx_8dace0" style="margin-top: 2px;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="_4g34">
                            <div class="_52z6">
                                <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0" data-sigil="m-dialog-header-title dialog-title">جارٍ التحميل...</div>
                            </div>
                        </div>
                        <div class="_5s61">
                            <div class="_52z8" id="modalDialogHeaderButtons"></div>
                        </div>
                    </div>
                </div>
                <div class="modalDialogView" id="modalDialogView"></div>
                <div class="_5v5d _5v5e fcg" id="dialogSpinner">
                    <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_e_nm" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                    جارٍ التحميل...
                </div>
            </div>
        </div>
        <script type="text/javascript" nonce="6CuhNCnW">
            /*<![CDATA[*/
            (function() {
                if (top != self) {
                    try {
                        if (parent != top) {
                            throw 1;
                        }
                        var si_cj_d = ["apps.facebook.com", "apps.beta.facebook.com"];
                        var href = top.location.href.toLowerCase();
                        for (var i = 0; i < si_cj_d.length; i++) {
                            if (href.indexOf(si_cj_d[i]) >= 0) {
                                throw 1;
                            }
                        }
                    } catch (e) {
                        window.document.write("\u003Cstyle nonce=\"6CuhNCnW\">body * {display:none !important;}\u003C\/style>\u003Ca href=\"#\" onclick=\"top.location.href=window.location.href\" style=\"display:block !important;padding:10px\">\u0627\u0644\u0627\u0646\u062a\u0642\u0627\u0644 \u0625\u0644\u0649 Facebook.com\u003C\/a>");
                        /*3ki-Z1ZR*/
                    }
                }
            }())
            /*]]>*/
        </script>
        <script id="u_0_o_0W" nonce="6CuhNCnW">
            MPageLoadClientMetrics.logFirstPaint(true);
        </script>
        <script id="u_0_p_d6" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3iZfD4/y8/l/ar_AR/4Ev2grj23-i.js?_nc_x=WuaycbPD3fM" data-bootloader-hash="Ec8roc9" nonce="6CuhNCnW"></script>
        <script id="u_0_q_Ag" nonce="6CuhNCnW">
            requireLazy(["HasteSupportData"], function(m) {
                m.handle({
                    "gkxData": {
                        "5241": {
                            "result": true,
                            "hash": "AT7o1bCQPGpf3ShEyuE"
                        },
                        "5919": {
                            "result": false,
                            "hash": "AT6PGptIPUYH051B1Rc"
                        },
                        "676920": {
                            "result": false,
                            "hash": "AT497IX4gOFG8gZeluk"
                        },
                        "708253": {
                            "result": false,
                            "hash": "AT5n4hBL3YTMnQWtjwk"
                        },
                        "996940": {
                            "result": false,
                            "hash": "AT7opYuEGy3sjG1atkQ"
                        },
                        "1263340": {
                            "result": false,
                            "hash": "AT5bwizWgDaFQudmrWc"
                        }
                    }
                })
            });
            requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
                (new ServerJS()).handle({
                    "define": [["cr:696703", [], {
                        "__rc": [null, "Aa36qNyRma8HH0m6qYi_Pt0Cj9SgKGxXXAock-s7T-VOKu2k5jT1rtVfsXKxFBbPHt0RsPI0KZyfhhbc4ennUc1q4MU"]
                    }, -1], ["cr:717822", ["TimeSliceImpl"], {
                        "__rc": ["TimeSliceImpl", "Aa36qNyRma8HH0m6qYi_Pt0Cj9SgKGxXXAock-s7T-VOKu2k5jT1rtVfsXKxFBbPHt0RsPI0KZyfhhbc4ennUc1q4MU"]
                    }, -1], ["CometPersistQueryParams", [], {
                        "relative": {},
                        "domain": {}
                    }, 6231], ["BigPipeExperiments", [], {
                        "link_images_to_pagelets": false,
                        "enable_bigpipe_plugins": false
                    }, 907], ["BootloaderConfig", [], {
                        "deferBootloads": false,
                        "jsRetries": [200, 500],
                        "jsRetryAbortNum": 2,
                        "jsRetryAbortTime": 5,
                        "silentDups": false,
                        "hypStep4": false,
                        "phdOn": false,
                        "btCutoffIndex": 574
                    }, 329], ["CSSLoaderConfig", [], {
                        "timeout": 5000,
                        "modulePrefix": "BLCSS:",
                        "loadEventSupported": true
                    }, 619], ["CurrentCommunityInitialData", [], {}, 490], ["CurrentUserInitialData", [], {
                        "ACCOUNT_ID": "100006922931632",
                        "USER_ID": "100006922931632",
                        "NAME": "Michael Zaref",
                        "SHORT_NAME": "Michael",
                        "IS_BUSINESS_PERSON_ACCOUNT": false,
                        "HAS_SECONDARY_BUSINESS_PERSON": false,
                        "IS_FACEBOOK_WORK_ACCOUNT": false,
                        "IS_MESSENGER_ONLY_USER": false,
                        "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                        "IS_MESSENGER_CALL_GUEST_USER": false,
                        "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                        "APP_ID": "412378670482",
                        "IS_BUSINESS_DOMAIN": false
                    }, 270], ["ErrorDebugHooks", [], {
                        "SnapShotHook": null
                    }, 185], ["ISB", [], {}, 330], ["LSD", [], {
                        "token": "02vAR91pJYZNF9JBEwp8Ff"
                    }, 323], ["MRequestConfig", [], {
                        "dtsg": {
                            "token": "AQG3XiHyGP6aojI:38:1651737636",
                            "valid_for": 86400,
                            "expire": 1651824061
                        },
                        "dtsg_ag": {
                            "token": "AQxAI0ZDkui4-cxVX-kmDLoUq64VT--fqqvwA3Xb3SKx8XlG:38:1651737636",
                            "valid_for": 604800,
                            "expire": 1652342461
                        },
                        "checkResponseOrigin": true,
                        "checkResponseToken": true,
                        "cleanFinishedRequest": false,
                        "cleanFinishedPrefetchRequests": true,
                        "ajaxResponseToken": {
                            "secret": "KrZDMBCaCgAhHLLChrpT3Fr6AqZc8ZAf",
                            "encrypted": "AYlrr9S-2lZmIKbFyCHOd-527ttnczLbxX2omtJ5xLnCLcjW7iaTXFmk7tqktHzVnbRH4FiuQT0uqTQbeDNkuEWM1af_UgDW-H3DZGCkyyJ7QQ"
                        }
                    }, 51], ["ServerNonce", [], {
                        "ServerNonce": "cq76SrZp0ARfxlKemTwRbw"
                    }, 141], ["SiteData", [], {
                        "server_revision": 1005458846,
                        "client_revision": 1005458846,
                        "tier": "",
                        "push_phase": "C3",
                        "pkg_cohort": "BP:mtouch_pkg",
                        "haste_session": "19117.BP:mtouch_pkg.2.0.0.0.",
                        "pr": 1.5,
                        "haste_site": "mobile",
                        "manifest_base_uri": "https:\/\/static.xx.fbcdn.net",
                        "manifest_origin": null,
                        "be_one_ahead": false,
                        "is_rtl": true,
                        "is_comet": false,
                        "is_experimental_tier": false,
                        "is_jit_warmed_up": true,
                        "hsi": "7094159233111244815-0",
                        "semr_host_bucket": "6",
                        "bl_hash_version": 2,
                        "skip_rd_bl": true,
                        "comet_env": 0,
                        "wbloks_env": false,
                        "spin": 0,
                        "__spin_r": 1005458846,
                        "__spin_b": "trunk",
                        "__spin_t": 1651737660,
                        "vip": "102.132.97.35"
                    }, 317], ["SprinkleConfig", [], {
                        "param_name": "jazoest",
                        "version": 2,
                        "should_randomize": false
                    }, 2111], ["PromiseUsePolyfillSetImmediateGK", [], {
                        "www_always_use_polyfill_setimmediate": false
                    }, 2190], ["KSConfig", [], {
                        "killed": {
                            "__set": ["MOBILIZER_SELF_SERVE_OWNERSHIP_RESOLVER", "MLHUB_FLOW_AUTOREFRESH_SEARCH", "NEKO_DISABLE_CREATE_FOR_SAP", "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE", "BUY_AT_UI_LINE_DELETE", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME", "ADS_STORE_VISITS_METRICS_DEPRECATION", "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER", "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION", "NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL", "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS", "LAB_NET_NEW_UI_RELEASE", "POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "SRT_BANZAI_SRT_CORE_LOGGER", "SRT_BANZAI_SRT_MAIN_LOGGER", "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES", "POCKET_MONSTERS_UPDATE_NAME", "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE", "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER", "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD"]
                        },
                        "ko": {
                            "__set": ["8H4bQmEiuLT", "3OsLvnSHNTt", "1G7wJ6bJt9K", "9NpkGYwzrPG", "3oh5Mw86USj", "8NAceEy9JZo", "7FOIzos6XJX", "rf8JEPGgOi", "4j36SVzvP3w", "4NSq3ZC4ScE", "53gCxKq281G", "3yzzwBY7Npj", "1onzIv0jH6H", "8PlKuowafe8", "1ntjZ2zgf03", "4SIH2GRVX5W", "2dhqRnqXGLQ", "2WgiNOrHVuC", "amKHb4Cw4WI", "5mNEXob0nTj", "8rDvN9vWdAK", "9cL5o2kjfZo", "5BdzWGmfvrA", "DDZhogI19W", "acrJTh9WGdp", "1oOE64fL4wO", "9Gd8qgRxn8z", "MPMaqnqZ9c", "5XCz1h9Iaw3", "7r6mSP7ofr2", "6DGPLrRdyts", "aWxCyi1sEC7", "9kCSDzzr8fu"]
                        }
                    }, 2580], ["ImmediateImplementationExperiments", [], {
                        "prefer_message_channel": true
                    }, 3419], ["UriNeedRawQuerySVConfig", [], {
                        "uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx", "booking.com", "nibio.no"]
                    }, 3871], ["RunGatingConfig", [], {
                        "shouldUseBrowserUnload": true
                    }, 3914], ["InitialCookieConsent", [], {
                        "deferCookies": false,
                        "initialConsent": {
                            "__set": [1, 2]
                        },
                        "noCookies": false,
                        "shouldShowCookieBanner": false
                    }, 4328], ["TrustedTypesConfig", [], {
                        "useTrustedTypes": false,
                        "reportOnly": false
                    }, 4548], ["WebConnectionClassServerGuess", [], {
                        "connectionClass": "EXCELLENT"
                    }, 4705], ["BootloaderEndpointConfig", [], {
                        "debugNoBatching": false,
                        "endpointURI": "https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/"
                    }, 5094], ["CookieConsentIFrameConfig", [], {
                        "consent_param": "FQAREhIA.ARYtMwIPGHjw6PlZ4mqUjNObreLngrkdYNYOlTU5f0qGIEfU",
                        "allowlisted_iframes": []
                    }, 5540], ["cr:729414", [], {
                        "__rc": [null, "Aa0Jq65eVJbR80JFDXCZ9RqJ9JjMBtjPV4T2rz2OI9pImwqrYXFJvoAZb5oVoPZx4z77ad2rfAa9qyIeNrw3iEbt"]
                    }, -1], ["JSErrorLoggingConfig", [], {
                        "appId": 412378670482,
                        "extra": [],
                        "reportInterval": 50,
                        "sampleWeight": null,
                        "sampleWeightKey": "__jssesw",
                        "projectBlocklist": []
                    }, 2776]],
                    "require": [["MPrelude"], ["VisualCompletionGating"], ["RequireDeferredReference", "unblock", [], [["VisualCompletionGating"], "sd"]], ["RequireDeferredReference", "unblock", [], [["VisualCompletionGating"], "css"]]]
                });
            });
        </script>
        <script>
            now_inl = (function() {
                var p = window.performance;
                return p && p.now && p.timing && p.timing.navigationStart ? function() {
                    return p.now() + p.timing.navigationStart
                }
                : function() {
                    return new Date().getTime()
                }
                ;
            }
            )();
            window.__bigPipeFR = now_inl();
        </script>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y1/l/0,cross/16s64WRTgpH.css?_nc_x=WuaycbPD3fM" as="style" crossorigin="anonymous"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yn/l/0,cross/BrejZl9ZRGP.css?_nc_x=WuaycbPD3fM" as="style" crossorigin="anonymous"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/7ZTAS_IXym8.js?_nc_x=WuaycbPD3fM" as="script" crossorigin="anonymous" nonce="6CuhNCnW"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yI/l/0,cross/vcjfokSJV1h.css?_nc_x=WuaycbPD3fM" as="style" crossorigin="anonymous"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yc/l/0,cross/hZE1o3XIVX_.css?_nc_x=WuaycbPD3fM" as="style" crossorigin="anonymous"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iZfD4/y8/l/ar_AR/4Ev2grj23-i.js?_nc_x=WuaycbPD3fM" as="script" crossorigin="anonymous" nonce="6CuhNCnW"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yx/l/0,cross/_Um4huGleju.css?_nc_x=WuaycbPD3fM" as="style" crossorigin="anonymous"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yT/r/I4Wi6-E1wEM.js?_nc_x=WuaycbPD3fM" as="script" crossorigin="anonymous" nonce="6CuhNCnW"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iYkn4/y5/l/ar_AR/t0-jWnSb5kU.js?_nc_x=WuaycbPD3fM" as="script" crossorigin="anonymous" nonce="6CuhNCnW"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iv4K4/yX/l/ar_AR/Z1PwxLwHQIv.js?_nc_x=WuaycbPD3fM" as="script" crossorigin="anonymous" nonce="6CuhNCnW"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/yXt1Xv4KMxp.js?_nc_x=WuaycbPD3fM" as="script" crossorigin="anonymous" nonce="6CuhNCnW"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/4BPoa6O0wJm.js?_nc_x=WuaycbPD3fM" as="script" crossorigin="anonymous" nonce="6CuhNCnW"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=WuaycbPD3fM" as="script" crossorigin="anonymous" nonce="6CuhNCnW"/>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/ilMFccLWbov.js?_nc_x=WuaycbPD3fM" as="script" crossorigin="anonymous" nonce="6CuhNCnW"/>
        <script>
            window.__bigPipeCtor = now_inl();
            requireLazy(["BigPipe"], function(BigPipe) {
                define("__bigPipe", [], window.bigPipe = new BigPipe({
                    "forceFinish": true,
                    "config": {
                        "flush_pagelets_asap": true,
                        "dispatch_pagelet_replayable_actions": false
                    }
                }));
            });
        </script>
        <script nonce="6CuhNCnW">
            (function() {
                var n = now_inl();
                requireLazy(["__bigPipe"], function(bigPipe) {
                    bigPipe.beforePageletArrive("first_response", n);
                })
            }
            )();
        </script>
        <script nonce="6CuhNCnW">
            requireLazy(["__bigPipe"], (function(bigPipe) {
                bigPipe.onPageletArrive({
                    displayResources: ["008SXc6", "VI6O485", "1GzRKWC", "UKa9LUq", "V70tt69", "Ec8roc9", "ePrkCIi", "eJUoigY", "OHEGYjU", "y5R9Kzo", "Dtm1pob", "IsQZRlw", "bJ922yg", "FJqL2Al"],
                    id: "first_response",
                    phase: 0,
                    last_in_phase: true,
                    tti_phase: 0,
                    all_phases: [63, 7],
                    jsmods: {
                        define: [["cr:1642797", ["BanzaiBase"], {
                            __rc: ["BanzaiBase", "Aa36qNyRma8HH0m6qYi_Pt0Cj9SgKGxXXAock-s7T-VOKu2k5jT1rtVfsXKxFBbPHt0RsPI0KZyfhhbc4ennUc1q4MU"]
                        }, -1], ["cr:694370", ["requestIdleCallbackBlue"], {
                            __rc: ["requestIdleCallbackBlue", "Aa36qNyRma8HH0m6qYi_Pt0Cj9SgKGxXXAock-s7T-VOKu2k5jT1rtVfsXKxFBbPHt0RsPI0KZyfhhbc4ennUc1q4MU"]
                        }, -1], ["cr:692209", ["cancelIdleCallbackBlue"], {
                            __rc: ["cancelIdleCallbackBlue", "Aa36qNyRma8HH0m6qYi_Pt0Cj9SgKGxXXAock-s7T-VOKu2k5jT1rtVfsXKxFBbPHt0RsPI0KZyfhhbc4ennUc1q4MU"]
                        }, -1], ["ServerTimeData", [], {
                            serverTime: 1651737661229,
                            timeOfRequestStart: 1651737660612.8,
                            timeOfResponseStart: 1651737660612.8
                        }, 5943], ["UserAgentData", [], {
                            browserArchitecture: "64",
                            browserFullVersion: "100.0.4896.127",
                            browserMinorVersion: 0,
                            browserName: "Chrome",
                            browserVersion: 100,
                            deviceName: "Unknown",
                            engineName: "WebKit",
                            engineVersion: "537.36",
                            platformArchitecture: "64",
                            platformName: "Windows",
                            platformVersion: "10",
                            platformFullVersion: "10"
                        }, 527], ["IntlVariationHoldout", [], {
                            disable_variation: false
                        }, 6533], ["FbtResultGK", [], {
                            shouldReturnFbtResult: true,
                            inlineMode: "NO_INLINE"
                        }, 876], ["IntlPhonologicalRules", [], {
                            meta: {
                                "/_RTL/": "(([֐-ֿ]|[׀-߿]))",
                                "/_Delim/": "(\u0001‏)",
                                "/_B/": "([.,!?\\s]|^)",
                                "/_E/": "([.,!?\\s]|$)"
                            },
                            patterns: {
                                "/ة_Delim_RTL/": "ت\u0001$2",
                                "/_RTL_Delim(\\s*)_RTL/": "$1\u0001$4$5",
                                "/_\u0001([^\u0001]*)\u0001/": "javascript"
                            }
                        }, 1496], ["IntlViewerContext", [], {
                            GENDER: 1,
                            regionalLocale: null
                        }, 772], ["MJSEnvironment", [], {
                            IS_APPLE_WEBKIT_IOS: false,
                            IS_TABLET: false,
                            IS_ANDROID: false,
                            IS_CHROME: true,
                            IS_FIREFOX: false,
                            IS_WINDOWS_PHONE: false,
                            IS_SAMSUNG_DEVICE: false,
                            OS_VERSION: 10,
                            PIXEL_RATIO: 1.25,
                            BROWSER_NAME: "Chrome Desktop"
                        }, 46], ["NumberFormatConfig", [], {
                            decimalSeparator: "٫",
                            numberDelimiter: "٬",
                            minDigitsForThousandsSeparator: 4,
                            standardDecimalPatternInfo: {
                                primaryGroupSize: 3,
                                secondaryGroupSize: 3
                            },
                            numberingSystemData: {
                                digits: "٠١٢٣٤٥٦٧٨٩"
                            }
                        }, 54], ["IntlNumberTypeConfig", [], {
                            impl: "if (n === 0) { return IntlVariations.NUMBER_ZERO; } else if (n === 1) { return IntlVariations.NUMBER_ONE; } else if (n === 2) { return IntlVariations.NUMBER_TWO; } else if (n % 100 >= 3 && n % 100 \x3C= 10) { return IntlVariations.NUMBER_FEW; } else if (n % 100 >= 11 && n % 100 \x3C= 99) { return IntlVariations.NUMBER_MANY; } else { return IntlVariations.NUMBER_OTHER; }"
                        }, 3405], ["CookieDomain", [], {
                            domain: "facebook.com"
                        }, 6421], ["CookieCoreConfig", [], {
                            c_user: {
                                s: "None"
                            },
                            cppo: {
                                t: 86400,
                                s: "None"
                            },
                            dpr: {
                                t: 604800,
                                s: "None"
                            },
                            fbl_ci: {
                                t: 31536000,
                                s: "None"
                            },
                            fbl_cs: {
                                t: 31536000,
                                s: "None"
                            },
                            fbl_st: {
                                t: 31536000,
                                s: "Strict"
                            },
                            i_user: {
                                s: "None"
                            },
                            locale: {
                                t: 604800,
                                s: "None"
                            },
                            m_pixel_ratio: {
                                t: 604800,
                                s: "None"
                            },
                            noscript: {
                                s: "None"
                            },
                            presence: {
                                t: 2592000,
                                s: "None"
                            },
                            sfau: {
                                s: "None"
                            },
                            usida: {
                                s: "None"
                            },
                            vpd: {
                                t: 5184000,
                                s: "Lax"
                            },
                            wd: {
                                t: 604800,
                                s: "Lax"
                            },
                            "x-referer": {
                                s: "None"
                            },
                            "x-src": {
                                t: 1,
                                s: "None"
                            }
                        }, 2104], ["ZeroCategoryHeader", [], {}, 1127], ["ZeroRewriteRules", [], {
                            rewrite_rules: {},
                            whitelist: {
                                "/hr/r": 1,
                                "/hr/p": 1,
                                "/zero/unsupported_browser/": 1,
                                "/zero/policy/optin": 1,
                                "/zero/optin/write/": 1,
                                "/zero/optin/legal/": 1,
                                "/zero/optin/free/": 1,
                                "/about/privacy/": 1,
                                "/about/privacy/update/": 1,
                                "/privacy/explanation/": 1,
                                "/zero/toggle/welcome/": 1,
                                "/zero/toggle/nux/": 1,
                                "/zero/toggle/settings/": 1,
                                "/fup/interstitial/": 1,
                                "/work/landing": 1,
                                "/work/login/": 1,
                                "/work/email/": 1,
                                "/ai.php": 1,
                                "/js_dialog_resources/dialog_descriptions_android.json": 0,
                                "/connect/jsdialog/MPlatformAppInvitesJSDialog/": 0,
                                "/connect/jsdialog/MPlatformOAuthShimJSDialog/": 0,
                                "/connect/jsdialog/MPlatformLikeJSDialog/": 0,
                                "/qp/interstitial/": 1,
                                "/qp/action/redirect/": 1,
                                "/qp/action/close/": 1,
                                "/zero/support/ineligible/": 1,
                                "/zero_balance_redirect/": 1,
                                "/zero_balance_redirect": 1,
                                "/zero_balance_redirect/l/": 1,
                                "/l.php": 1,
                                "/lsr.php": 1,
                                "/ajax/dtsg/": 1,
                                "/checkpoint/block/": 1,
                                "/exitdsite": 1,
                                "/zero/balance/pixel/": 1,
                                "/zero/balance/": 1,
                                "/zero/balance/carrier_landing/": 1,
                                "/zero/flex/logging/": 1,
                                "/tr": 1,
                                "/tr/": 1,
                                "/sem_campaigns/sem_pixel_test/": 1,
                                "/bookmarks/flyout/body/": 1,
                                "/zero/subno/": 1,
                                "/confirmemail.php": 1,
                                "/policies/": 1,
                                "/mobile/internetdotorg/classifier/": 1,
                                "/zero/dogfooding": 1,
                                "/xti.php": 1,
                                "/zero/fblite/config/": 1,
                                "/hr/zsh/wc/": 1,
                                "/ajax/bootloader-endpoint/": 1,
                                "/mobile/zero/carrier_page/": 1,
                                "/mobile/zero/carrier_page/education_page/": 1,
                                "/mobile/zero/carrier_page/feature_switch/": 1,
                                "/mobile/zero/carrier_page/settings_page/": 1,
                                "/aloha_check_build": 1,
                                "/upsell/zbd/softnudge/": 1,
                                "/mobile/zero/af_transition/": 1,
                                "/mobile/zero/af_transition/action/": 1,
                                "/mobile/zero/freemium/": 1,
                                "/mobile/zero/freemium/redirect/": 1,
                                "/mobile/zero/freemium/zero_fup/": 1,
                                "/privacy/policy/": 1,
                                "/privacy/center/": 1,
                                "/data/manifest/": 1,
                                "/4oh4.php": 1,
                                "/autologin.php": 1,
                                "/birthday_help.php": 1,
                                "/checkpoint/": 1,
                                "/contact-importer/": 1,
                                "/cr.php": 1,
                                "/legal/terms/": 1,
                                "/login.php": 1,
                                "/login/": 1,
                                "/mobile/account/": 1,
                                "/n/": 1,
                                "/remote_test_device/": 1,
                                "/upsell/buy/": 1,
                                "/upsell/buyconfirm/": 1,
                                "/upsell/buyresult/": 1,
                                "/upsell/promos/": 1,
                                "/upsell/continue/": 1,
                                "/upsell/h/promos/": 1,
                                "/upsell/loan/learnmore/": 1,
                                "/upsell/purchase/": 1,
                                "/upsell/promos/upgrade/": 1,
                                "/upsell/buy_redirect/": 1,
                                "/upsell/loan/buyconfirm/": 1,
                                "/upsell/loan/buy/": 1,
                                "/upsell/sms/": 1,
                                "/wap/a/channel/reconnect.php": 1,
                                "/wap/a/nux/wizard/nav.php": 1,
                                "/wap/appreg.php": 1,
                                "/wap/birthday_help.php": 1,
                                "/wap/c.php": 1,
                                "/wap/confirmemail.php": 1,
                                "/wap/cr.php": 1,
                                "/wap/login.php": 1,
                                "/wap/r.php": 1,
                                "/zero/datapolicy": 1,
                                "/a/timezone.php": 1,
                                "/a/bz": 1,
                                "/bz/reliability": 1,
                                "/r.php": 1,
                                "/mr/": 1,
                                "/reg/": 1,
                                "/registration/log/": 1,
                                "/terms/": 1,
                                "/f123/": 1,
                                "/expert/": 1,
                                "/experts/": 1,
                                "/terms/index.php": 1,
                                "/terms.php": 1,
                                "/srr/": 1,
                                "/msite/redirect/": 1,
                                "/fbs/pixel/": 1,
                                "/contactpoint/preconfirmation/": 1,
                                "/contactpoint/cliff/": 1,
                                "/contactpoint/confirm/submit/": 1,
                                "/contactpoint/confirmed/": 1,
                                "/contactpoint/login/": 1,
                                "/preconfirmation/contactpoint_change/": 1,
                                "/help/contact/": 1,
                                "/survey/": 1,
                                "/upsell/loyaltytopup/accept/": 1,
                                "/settings/": 1,
                                "/lite/": 1,
                                "/zero_status_update/": 1,
                                "/operator_store/": 1,
                                "/upsell/": 1,
                                "/wifiauth/login/": 1
                            }
                        }, 1478], ["CookieCoreLoggingConfig", [], {
                            maximumIgnorableStallMs: 16.67,
                            sampleRate: 9.7e-5,
                            sampleRateClassic: 1.0e-10,
                            sampleRateFastStale: 1.0e-8
                        }, 3401], ["MLoadingIndicatorSigils", [], {
                            ANIMATE: "m-loading-indicator-animate",
                            ROOT: "m-loading-indicator-root"
                        }, 279], ["MWebStorageMonsterWhiteList", [], {
                            whitelist: ["^CacheStorageVersion$", "^RTC_VIDEO_INPUT$", "^RTC_AUDIO_INPUT$", "^RTC_AUDIO_OUTPUT$", "^RTC_IS_AUDIO_ONLY$", "^RTC_NOISE_SUPPRESSION$", "^RTC_MUTE_STATE$", "^Session$", "^_oz_", "^_video_bandwidthEstimate$", "^Banzai$", "^bz", "^banzai\\:last_storage_flush$", "^falco_queue_", "^mutex", "^msys", "^Bandicoot\\:", "^imp_seq_num$", "^qe_switcher_nub_selection$", "^TabId$", "^sp_pi$", "^\\:userchooser\\:osessusers$", "^\\:userchooser\\:settings$", "^brands\\:console\\:config$", "^consoleEnabled$", "^__fb_messenger_desktop_presence_info$", "^vc_", "^_showMDevConsole$", "^ga_client_id$", "^_mswam_$", "^am_recently_used_filters\\:", "^am_image_size_cache$", "^ickt$", "^hb_timestamp$", "^signal_flush_timestamp$", "^last_fast_refresh$", "^_ctv_access_token$", "^_ctv_android_device_info$", "^_ctv_cast_access_token$", "^_ctv_casting_remote$", "^_ctv_console_log_viewer_on_full_screen_player_enabled$", "^_ctv_cookie_consent_displayed$", "^_ctv_debug_redux_logger_enabled$", "^_ctv_deviceUniqueIDFallback$", "^_ctv_gaming_consent_displayed$", "^_ctv_installed_app_player_debug_overlay_enabled$", "^_ctv_last_load_time_ms$", "^_ctv_locale$", "^_ctv_logged_out_constraints_sessions_count$", "^_ctv_reloadedDueToStaleApp$", "^_ctv_reloadedDueToUnrecoverableError$", "^_ctv_search_terms$", "^_ctv_tv_experiments$", "^_ctv_usedCloseAppFallback$", "^_ctv_user_sessions$", "^_ctv_video_debug_overlay_enabled$", "^_ctv_debug_rampart_server_number$", "^fx_did$", "^wa_lang_banner_dismissed$", "^bulletin_article_reader_onload_dialog_seen$", "^bulletin_session_attributes$", "^md_survey$", "^support_guest_chat$", "^comet_is_recent_profile_switch$", "^mw_exchange_vm$", "^has_seen_email_login_toast$"]
                        }, 254], ["MemoryLoggerConfigWebSitevarConfig", [], {
                            measurement_interval_minutes: 5
                        }, 5573], ["CurrentEnvironment", [], {
                            facebookdotcom: true,
                            messengerdotcom: false,
                            workplacedotcom: false,
                            instagramdotcom: false
                        }, 827], ["FWLoader", [], {}, 278], ["ImmediateActiveSecondsConfig", [], {
                            sampling_rate: 2003,
                            ias_bucket: 1530
                        }, 423], ["MPageControllerGating", [], {
                            shouldDeferUntilCertainNoRedirect: false,
                            shouldReleaseFetcherLock: true,
                            shouldLoadingScreenSetScriptPath: false,
                            shouldRenderAsync404: true
                        }, 2023], ["MobileAppDetect", [], {
                            is_mobile_app: false,
                            is_ads_manager_app: false,
                            is_pages_manager: false,
                            is_facebook_for_android: false,
                            is_facebook_for_android_in_app_browser: false,
                            is_android_faceweb: false,
                            is_facebook_for_ios: false,
                            is_instagram: false,
                            is_messenger_for_android: false,
                            is_messenger_for_ios: false,
                            is_messenger_lite_for_android: false,
                            is_messenger_lite_for_ios: false,
                            is_wilde: false,
                            is_kaios: false
                        }, 1109], ["MBanzaiConfig", [], {
                            MAX_SIZE: 10000,
                            MAX_WAIT: 30000,
                            MIN_WAIT: null,
                            RESTORE_WAIT: 30000,
                            blacklist: ["time_spent"],
                            disabled: false,
                            gks: {
                                platform_oauth_client_events: true,
                                boosted_pagelikes: true,
                                mtouch_use_beacon: true
                            },
                            known_routes: ["artillery_javascript_actions", "artillery_javascript_trace", "artillery_logger_data", "logger", "falco", "gk2_exposure", "js_error_logging", "loom_trace", "marauder", "perfx_custom_logger_endpoint", "qex", "require_cond_exposure_logging", "sri_logger_data"],
                            should_drop_unknown_routes: true,
                            should_log_unknown_routes: false
                        }, 32], ["FbtQTOverrides", [], {
                            overrides: {
                                "1_4d5777d7ee486a2e4b805efa4e22e54d": "إرسال رسالة",
                                "1_60ed801a8ab2dd9751f41a1ad73b15c1": "تمت إضافة قائمة بواسطة صفحة {page_name}. تعرف على ما تعرضه."
                            }
                        }, 551], ["AnalyticsCoreData", [], {
                            device_id: "$^|Acanf-gJX-ct4Qmc4xm5PDvbvwbdDiFaAnObBU7l2twaR0X4UXUBHNMdGQ4FzGLh__4pe3DY-CBA6VOpnPg5y88oJNlj|fd.AcY2_NH5qwWxDZvF3SfbKC3D0cQA0YCTkf3ywFElCaVK-1g27w9HpTz51zMUgR2Wq23GmYo5Vt5IvQJaiBU5Dbj8",
                            app_id: "412378670482",
                            enable_bladerunner: true,
                            enable_ack: true,
                            push_phase: "C3",
                            enable_observer: false,
                            enable_dataloss_timer: false,
                            enable_fallback_for_br: true,
                            fix_br_init_rc: false
                        }, 5237], ["LinkshimHandlerConfig", [], {
                            supports_meta_referrer: true,
                            default_meta_referrer_policy: "origin-when-crossorigin",
                            switched_meta_referrer_policy: "origin",
                            non_linkshim_lnfb_mode: null,
                            link_react_default_hash: "AT3-ifqhYsGRuFWmJjBuT7SUcxMS6z75sSsXPCyjbVKRF2VGNcnP2DX30fitrdKPrwT_4GQzpoQmBLueE2KPx1h7oUn-CzmIWzA-jrVAAy2QTLgLZ1t_noUXYFpUVPcpXoGG5Q",
                            untrusted_link_default_hash: "AT3Qv8kzYUaDTGoRzWVYaUJ3fTYMy-y5BVYS8-0sb1mhHXivKiN2Kde8QcI-ZDJbW6jpuo-M0iGqSiJeUx4tpfUsEmJpxRPtQ-jiglcV_KuxhOEn0RYIpLTJtJqOUggFxrolQQ",
                            linkshim_host: "lm.facebook.com",
                            linkshim_path: "/l.php",
                            linkshim_enc_param: "h",
                            linkshim_url_param: "u",
                            use_rel_no_opener: true,
                            always_use_https: true,
                            onion_always_shim: true,
                            middle_click_requires_event: true,
                            www_safe_js_mode: "asynclazy",
                            m_safe_js_mode: "MLynx_asynclazy",
                            ghl_param_link_shim: false,
                            click_ids: ["IwAR1Rt_wpBwqShFg6h8BJ9G6W2x4Hz1t23Lhvu1HqkzNLGgHE0H1Z-NDN7ds", "IwAR2zmHjHXf9Lzml6oBMxLQmsSrv7jReLk2D-mNtbNIIYhl-gCzfw249coIE", "IwAR3Tzmg0OzGpLICvncNolxKxNXHKGSa1AylgxmoSPLnERglZUeuTuEfEYDc", "IwAR2M2QUas_ymsbnm1dQCop2N-UauBADPAEeKS11MA7V9ibWdnPVTGOVDiVA", "IwAR1kjt8v4-Hg_HPLHnhJFjwL4aHsh3uLgewNh5u5l0T-5Cdjie8HEcQPN2A", "IwAR0FdjuW4692IdY-ijA_vqbqxMDRyY3x-Vpg3KLeUIIs_t3eMceKCh8rq58", "IwAR2aUWUeahK3U2U8xPLHDkpOSDJCyMNUDNkYK2QkOf7RMKBYRSgYv2r5owA", "IwAR2WwHVLe04lCFmpGxsqalwQAThaq8hSSzHiEqRiFOBkJ09T_wFSuOmT6Ys", "IwAR1Leh7SxK77MSSyGMom4NiAriyOTx8H-ENIMpp4_o_g1Ry8ywGJp9__zAU", "IwAR0fnNGpFJXBv-ao94ml4sR9Tb4Ue2x-8vJrq5wCwpG5iFUW_Ih-WnZw5MA", "IwAR0M9q6IvdSRa3zPh1xroRikCl68yMWtuUQE_rgXZYmZIBNTZOAcuRhCMAc", "IwAR0NlOaEZa8NCr9bMgvGJuVYzpaDOsgCn52EDGypWgEDpXPm77D-gV2icxs", "IwAR0Ikkvjmuq2NLwhVQzJ9GGAVwwIXVPhcttYgYe4M4DdgntETJg-eprIa1E", "IwAR16bnEjTd-RAbiMDafllpz9aJdzatjlm83TrXZ6TjwZi7CcwKRWmc78ybc", "IwAR1GDHjovul5RYIx7LIeGIs0fg13jiZdTakA9iouadeYspIg2eRVz8yj1f4", "IwAR149ckkcaw47lZ8vS7muP4Alh0F5IEeVFF6Ed81ZXYtk47bIk1KD9YcaSk", "IwAR3hPv6GrSCQO_5GVpa8ALHt4grTc52gtb8hUbaWyF98Xj5hDZ0z0Vd9fec", "IwAR0ypMe1-boXt7taeB8k-CvHqTj6InCfSrFvZw1Gr1h04CeurZBW90gFa0s", "IwAR3-xpaEd7-NJL_DZT1XpO6iJvM4JcAPPv3rdViLXAa6Pf8kpg9fKJzIvzk", "IwAR09ee1DqNIN6_IkHDFPMPGVdMv5_-lozp05yYryAFfBITvXSNg6ZHpwFMs", "IwAR0Yp78Oqa8SPgakK13QNlHTCMpFYf9jkjS5iaznbcmnXUnIt_oW1kcc9pk", "IwAR0aBc7KbL-3HMOSAm1ZEnxMgA1TT8ANdCXFO3N6-NMCzt-RT20udAtahls", "IwAR1jY334nimbyov30ZDNVT_ykceO6ULKl7mGaUjANAsgTntHSRSJDGePruY", "IwAR2VgyhRpQH2kh9lI8T6bXGxcUwtFKjcaA9bC2KAxnI25FzLTVkpkAROMQk", "IwAR2R3IyNagB67o_ZHJX978zOE7ROhr-9KlEGmhQhq3187yvZ_8ukfi71TBs", "IwAR37V5vyjZpKV1zbnzQS4hk_JVxsxlXdIgUc0zlZnBg-vSZe6SAYw1rRqWA", "IwAR0E2AByTc83HU1gg1yeDzGc6YzQWjUnVGNSO7IKUkBmUqCj5b3ZMbkxFXw", "IwAR2ga_2gcB2L_s7uby9nFnxwcOVX4QL3ye9OeUqpJA2CVhkn5yrr7IsDkuo", "IwAR37gpe-Vj5mG635q8oWtBne2cpHIUxob12mI7KuDZDj4AvJ2o4SFi8lqg8", "IwAR0Cr50eQb7T30hfMUwV5oZHrn-sYFOpsl3awklr3oWJWxyHKlu7isNojyE", "IwAR1anK5geYR4C4SiTn9dghCRE4eh8G60XnhzF0fxahsHG-6CNAmEHDNk7fM", "IwAR1vjJDaq623z9gSZqKXwFCVFUS7gYTpPtmK_ttS17iR5VVq6YLuObc-5mI", "IwAR2zhg2vCyrw6P6VzJGwQ26SwvgE6znRcD5a6iwEkZMecnc7AKo3mRRcxc0", "IwAR0yyW1MOc4l1-xhDRYikKrN3W4WJr-JA98Di6DZYRiFigdnGVYHmxQcaAk", "IwAR26cKFbVGeJah9ZIa_5f_dDHhBgfgqPDj53w81vuVmmak-3Q-r-Vs7JXpw", "IwAR2Vp7eQI37fd6pBFXs1LSzHlS0MED9HPGIM-gKv2iW_Xmbi5rT1HYnQBRk", "IwAR1FdTgOoPXM2G5MuPfN92ItWxIfepjExd3MYTkNfONf_fLrizVIWd2RSYk", "IwAR1-37CvBwf0PkX9I4hN_SVME-nve4EJP1vpM8NG5AzljmuG1JYSWMAVJb0", "IwAR32mvZtcuswujAG1bdoFPvdNNJAf2msUIgYYAarpWaU8Ik4nckuxFdRkQw", "IwAR1jtWoJz90w37SYfc94NsEfCjXLntikLtIHjAEpQZu1IZWRuoeeKQ4RZ3w", "IwAR2ii5kPnk-taMgDNBEfQ7Sp9EOhMs_ZfI5bDZvPiEjZdhc26X3rRLsbxp4", "IwAR0-Aw5DnCCeJRcDdFijyfiV_kLYI3FX0JXHda5js4B1wDexogVp2g1ErAo", "IwAR2lsy6Q67LxqnDaoGtXQEgEESCFC7UZxfIGdSrZrVTSpcZjtP9bw-CJZvI", "IwAR0b4TIw_Y0LLCVB5De0EWb6UWa1loIjdPV-6fgUN2GoVZe26l5vaDNy2Ow", "IwAR26uGhKLjuKMm9BGiqUZZ6bdqqe4zJX8VEJ5aIKw2ZwgJEWuuO2vvSUeR8", "IwAR2u7XrzsRiCjQHu6J39udlMnLbQ4FKDnrY0tMX9__rTllX76gPsSVUcrgY", "IwAR3GZPyoFG8U7hP1gV5eIjksBf7CQktSedXJDMhF97DDD3DDIvmOMMp4OeI", "IwAR1WvrOe0n3Kt1C443QZTyNRHCPbzfS07V2c5POjliNZmAuZ382Etqm6h0w", "IwAR2mfhDzCrkkhVB004kcDXNz0lGcYELoeFwXshwMn1RYdC9ADJMUmPmG--Q", "IwAR3p_wxmNbcNr0nQjuZe3R8WCRX65wzC6AMVJEkD1X2Y8bjrhgt6YNTQI9s"],
                            is_linkshim_supported: true,
                            current_domain: "facebook.com",
                            blocklisted_domains: ["ad.doubleclick.net", "ads-encryption-url-example.com", "bs.serving-sys.com", "ad.atdmt.com", "adform.net", "ad13.adfarm1.adition.com", "ilovemyfreedoms.com", "secure.adnxs.com"],
                            is_mobile_device: false
                        }, 27]],
                        elements: [["__elem_284feb50_0_0_t1", "header", 2], ["__elem_137952b5_0_0_ze", "u_0_1_06", 1], ["__elem_e980dec4_0_4_pV", "u_0_2_O7", 1], ["__elem_556710d0_0_2_Og", "search_jewel", 1], ["__elem_1965d86a_0_0_vv", "u_0_0_16", 1], ["__elem_e980dec4_0_7_HZ", "u_0_3_5d", 1], ["__elem_556710d0_0_0_2H", "feed_jewel", 1], ["__elem_e980dec4_0_0_Lr", "u_0_4_Hy", 1], ["__elem_e980dec4_0_6_Uj", "u_0_5_Y4", 1], ["__elem_556710d0_0_1_FR", "marketplace_jewel", 1], ["__elem_e980dec4_0_1_7D", "u_0_6_U9", 1], ["__elem_a9cb9b98_0_0_et", "videos_tab_jewel", 1], ["__elem_e980dec4_0_2_bQ", "u_0_7_bF", 1], ["__elem_e980dec4_0_5_k/", "u_0_8_YM", 1], ["__elem_e980dec4_0_3_Hb", "u_0_9_0e", 1], ["__elem_ad2bcfb1_0_0_A7", "MBackNavBar", 1], ["__elem_1acd3027_0_0_D3", "u_0_a_T1", 1], ["__elem_49f6b607_0_0_Fb", "root", 1], ["__elem_eed16c0a_0_0_VQ", "u_0_b_iI", 1], ["__elem_a588f507_0_0_Ay", "u_0_c_L/", 1], ["__elem_a588f507_0_1_zD", "u_0_d_E8", 1], ["__elem_0cdc66ad_0_0_qn", "u_0_f_SN", 1], ["__elem_0cdc66ad_0_1_My", "u_0_g_DC", 1]],
                        require: [["MFourOhFourJSLogger", "log", [], []], ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_49f6b607_0_0_Fb"], [[{
                            __m: "__elem_49f6b607_0_0_Fb"
                        }]]], ["GHLSurvey", "survey", [], []], ["MScrollPositionSaver"], ["MJewelsSafePageletLoader", "trackJewel", [], [{
                            pageletID: "m:chrome:schedulable-graph-search",
                            jewelSigil: "search",
                            retryUri: "/search/graph-search-flyout/?searchtitle&groupname"
                        }]], ["LoadingIndicator", "init", ["__elem_eed16c0a_0_0_VQ", "__elem_a588f507_0_0_Ay", "__elem_a588f507_0_1_zD"], [{
                            __m: "__elem_eed16c0a_0_0_VQ"
                        }, {
                            __m: "__elem_a588f507_0_0_Ay"
                        }, {
                            __m: "__elem_a588f507_0_1_zD"
                        }]], ["MPageError"], ["MJewelSet", "init", [], []], ["MDoubleSizeHeaderController", "init", ["__elem_284feb50_0_0_t1", "__elem_137952b5_0_0_ze"], [{
                            header: {
                                __m: "__elem_284feb50_0_0_t1"
                            },
                            searchbar: {
                                __m: "__elem_137952b5_0_0_ze"
                            }
                        }]], ["MJewelsTabability", "initAllJewels", ["__elem_284feb50_0_0_t1"], [{
                            bluebar: {
                                __m: "__elem_284feb50_0_0_t1"
                            }
                        }]], ["MFeedJewel", "init", ["__elem_556710d0_0_0_2H"], [{
                            __m: "__elem_556710d0_0_0_2H"
                        }, false, []]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_0_Lr"], [{
                            __m: "__elem_e980dec4_0_0_Lr"
                        }]], ["MMarketplaceTabJewel", "init", ["__elem_556710d0_0_1_FR"], [{
                            __m: "__elem_556710d0_0_1_FR"
                        }, {
                            jewelSigil: "marketplace_tab_jewel_button"
                        }]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_1_7D"], [{
                            __m: "__elem_e980dec4_0_1_7D"
                        }]], ["MJewelSetLite", "initJewel", [], ["videos_tab_jewel_button", {
                            initialCount: 0,
                            jewelActivePaths: [],
                            jewelActiveRegexes: ["^/watch/", "^/watch$"],
                            shouldPrefetch: false,
                            prefetchOnStart: false
                        }]], ["MWatchJewel", "init", ["__elem_a9cb9b98_0_0_et"], [{
                            __m: "__elem_a9cb9b98_0_0_et"
                        }, true]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_2_bQ"], [{
                            __m: "__elem_e980dec4_0_2_bQ"
                        }]], ["MBookmarksJewel", "initJewel", [], [{
                            noFlyout: true
                        }]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_3_Hb"], [{
                            __m: "__elem_e980dec4_0_3_Hb"
                        }]], ["MBackNavbar", "init", ["__elem_ad2bcfb1_0_0_A7", "__elem_1acd3027_0_0_D3"], [{
                            element: {
                                __m: "__elem_ad2bcfb1_0_0_A7"
                            },
                            logExposure: true,
                            enabled: true,
                            enabledForExternalReferer: false,
                            allPages: true,
                            pages: "",
                            backToFeedDisabled: false,
                            backOnArrowClick: false,
                            staticTitle: false,
                            linkElement: {
                                __m: "__elem_1acd3027_0_0_D3"
                            },
                            forceRefreshFeed: true,
                            modifyHistoryOnNav: false,
                            excludedPages: "/bookmarks/,/watch,/marketplace/,/friends/center/requests/,/notifications.php",
                            qeExposure: false,
                            scrollToNextFeedItem: false,
                            exposurePages: "",
                            isPageLoggingAllowed: true,
                            enableBackbarForSoftNav: "search",
                            enableFeedPrefetch: true,
                            includedSubPages: "/friends/center/requests/all/,/friends/center/requests/outgoing/,/friends/center/requests/hidden/"
                        }]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_4_pV"], [{
                            __m: "__elem_e980dec4_0_4_pV"
                        }]], ["MGenericJewel", "init", ["__elem_556710d0_0_2_Og", "__elem_1965d86a_0_0_vv"], ["search", {
                            __m: "__elem_556710d0_0_2_Og"
                        }, {
                            __m: "__elem_1965d86a_0_0_vv"
                        }]], ["MJewelSetLite", "initJewel", [], ["requests", {
                            initialCount: 0,
                            jewelActivePaths: ["/friends/center/requests/"],
                            shouldPrefetch: true,
                            prefetchOnBadgeUpdate: true,
                            prefetchOnStart: false
                        }]], ["MFriendingJewelChannelUpdates", "start", [], []], ["MMessengerMQTTConnection", "setUp", [], [{
                            fbid: "100006922931632",
                            irisSeqID: "167870",
                            appID: 219994525426954,
                            endpoint: "wss://edge-chat.facebook.com/chat?region=cln"
                        }]], ["MJewelSetLite", "initJewel", [], ["notifications", {
                            initialCount: 2,
                            jewelActivePaths: ["/notifications.php"],
                            shouldPrefetch: true,
                            prefetchOnBadgeUpdate: true,
                            prefetchOnStart: true
                        }]], ["MNotificationsJewelChannelUpdates", "start", [], []], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_5_k/"], [{
                            __m: "__elem_e980dec4_0_5_k/"
                        }]], ["MMessengerMQTTConnection", "setUp", [], [{
                            fbid: "100006922931632",
                            irisSeqID: "167870",
                            appID: 219994525426954,
                            endpoint: "wss://edge-chat.facebook.com/chat?region=cln"
                        }]], ["MJewelSetLite", "initJewel", [], ["messages", {
                            initialCount: 0,
                            jewelActivePaths: ["/messages/"],
                            shouldPrefetch: true,
                            prefetchOnBadgeUpdate: true,
                            prefetchOnStart: false
                        }]], ["MMessagesJewelChannelUpdates", "start", [], [false]], ["MMessengerMQTTConnection", "setUp", [], [{
                            fbid: "100006922931632",
                            irisSeqID: "167870",
                            appID: 219994525426954,
                            endpoint: "wss://edge-chat.facebook.com/chat?region=cln"
                        }]], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_6_Uj"], [{
                            __m: "__elem_e980dec4_0_6_Uj"
                        }]], ["MSplashScreenSwRegistration", "unregister", [], []], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_7_HZ"], [{
                            __m: "__elem_e980dec4_0_7_HZ"
                        }]], ["MPageHeaderAccessibility"], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_0_qn"], [{
                            __m: "__elem_0cdc66ad_0_0_qn"
                        }]], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_1_My"], [{
                            __m: "__elem_0cdc66ad_0_1_My"
                        }]], ["MLoadingIndicator", "init", [], ["u_0_e_nm"]], ["MPageLoadClientMetricsCallbacks", "init", [], [{
                            lid: "7094159233111244815-0"
                        }]], ["LogHistoryListeners"], ["ScriptPath", "set", [], ["/flib/init/zeusgodofthunder/__entrypoint.php", "a7dba9f9", {
                            imp_id: "0CgnLbTww32rCcoEr",
                            ef_page: null,
                            entity_id: 1350
                        }]], ["MCommentViewportTracking", "singleton", [], [{
                            enabled: true,
                            debug_console: false,
                            debug_html: false,
                            idle_timeout: 5000,
                            min_duration_to_log: 100,
                            min_visible_size: 200
                        }]], ["MLogging", "main", [], [{
                            refid: 0
                        }]], ["RemoteDevice", "init", [], [{
                            performHardwareDetection: false,
                            hashId: null,
                            vpd: false
                        }]], ["Artillery"], ["MLink", "setupListener", [], []], ["MLinkHack"], ["MModalDialogInit"], ["MVerifyCache", "main", [], [{
                            viewer: 100006922931632
                        }]], ["EventProfiler"], ["MPageNavigationTracking", "init", [], []], ["FalcoLoggerTransports", "attach", [], []], ["ScriptPathLogger", "startLogging", [], []], ["MTimeSpentBitArrayLogger", "init", [], ["m", false]], ["MCoreDeferred"], ["FbtLogging"], ["IntlQtEventFalcoEvent"], ["BanzaiScuba_DEPRECATED"], ["MPageControllerImpl"], ["MPageFetcherImpl"], ["MqttLongPollingRunner"], ["LogWebMemoryUsageFalcoEvent"], ["json-bigint"], ["RequireDeferredReference", "unblock", [], [["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "MPageControllerImpl", "MPageFetcherImpl", "MqttLongPollingRunner", "LogWebMemoryUsageFalcoEvent", "VisualCompletionGating", "json-bigint"], "sd"]], ["RequireDeferredReference", "unblock", [], [["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "MPageControllerImpl", "MPageFetcherImpl", "MqttLongPollingRunner", "LogWebMemoryUsageFalcoEvent", "VisualCompletionGating", "json-bigint"], "css"]]],
                        pre_display_requires: [["AddressBar", "setupLoadListener", [], [], 4], ["MobileBigPipeStratcomProxy", "init", [], [], 4], ["Stratcom", "init", [], [], 4], ["MViewport", "init", [], [], 4], ["ViewportDimensions", "init", [], [], 4], ["MPageController", "init", [], [], 4], ["onSyncTTI", "run", [], [], 4], ["MLiteInit", "init", [], [], 4]]
                    },
                    hsrp: {
                        hsdp: {
                            clpData: {
                                "1814852": {
                                    r: 1
                                },
                                "1838142": {
                                    r: 1,
                                    s: 1
                                },
                                "1942319": {
                                    r: 1,
                                    s: 1
                                },
                                "1743922": {
                                    r: 1
                                },
                                "1743925": {
                                    r: 1
                                },
                                "1837559": {
                                    r: 1
                                },
                                "1744057": {
                                    r: 500,
                                    s: 1
                                },
                                "1744058": {
                                    r: 5000,
                                    s: 1
                                },
                                "1744059": {
                                    r: 10000,
                                    s: 1
                                },
                                "1744060": {
                                    r: 1000,
                                    s: 1
                                },
                                "1842512": {
                                    r: 1
                                },
                                "1829319": {
                                    r: 1
                                },
                                "1829320": {
                                    r: 1
                                },
                                "1843988": {
                                    r: 1
                                },
                                "1848815": {
                                    r: 10000,
                                    s: 1
                                },
                                "1949898": {
                                    r: 1
                                },
                                "1765264": {
                                    r: 1,
                                    s: 1
                                }
                            },
                            gkxData: {
                                "1167394": {
                                    result: false,
                                    hash: "AT7BpN-tlUPwbIIF_nc"
                                },
                                "1059877": {
                                    result: false,
                                    hash: "AT53XV4TWT4lc3_mFTE"
                                },
                                "3959": {
                                    result: true,
                                    hash: "AT5An4B4pPVNHiK8CLk"
                                },
                                "676837": {
                                    result: false,
                                    hash: "AT4N8wBZA8ctCdHwfpc"
                                },
                                "1070739": {
                                    result: false,
                                    hash: "AT5rKAR6NQAuoRaHato"
                                },
                                "712819": {
                                    result: true,
                                    hash: "AT79nTpb4gT-yu86O3E"
                                },
                                "762": {
                                    result: false,
                                    hash: "AT7XePNdehhQhxt4ksA"
                                },
                                "2421": {
                                    result: false,
                                    hash: "AT4_c2YkDHNQl6QGKfA"
                                },
                                "2795": {
                                    result: false,
                                    hash: "AT5ilL0A5sDVhuaBU7s"
                                },
                                "3400": {
                                    result: true,
                                    hash: "AT5LV5sAIJng7-zcAaU"
                                },
                                "4166": {
                                    result: false,
                                    hash: "AT7yrb5QuQ92736u-BA"
                                },
                                "4984": {
                                    result: true,
                                    hash: "AT71gKcp5TYQzjDd-t4"
                                },
                                "5156": {
                                    result: false,
                                    hash: "AT5GfXPwqB3i2XNzDpY"
                                },
                                "687751": {
                                    result: false,
                                    hash: "AT5w99diRWCeIUcjsEY"
                                },
                                "778292": {
                                    result: false,
                                    hash: "AT574OhXHwX0kRP2uUc"
                                },
                                "832242": {
                                    result: false,
                                    hash: "AT7QZmREZ7b0HQdOcDQ"
                                },
                                "863760": {
                                    result: false,
                                    hash: "AT7kJGO3H9FsEkFLmTc"
                                },
                                "945829": {
                                    result: true,
                                    hash: "AT6KFs8jy_GkmgnUDNU"
                                },
                                "968609": {
                                    result: true,
                                    hash: "AT7nKteWCVYK6uN6khg"
                                },
                                "1001007": {
                                    result: false,
                                    hash: "AT54HpnriRBxXJ_MN8Q"
                                },
                                "1066746": {
                                    result: false,
                                    hash: "AT55_E5b8Sj7u5rUuAw"
                                },
                                "1166607": {
                                    result: false,
                                    hash: "AT7xrOkGBcaF8I5uX0M"
                                },
                                "910664": {
                                    result: false,
                                    hash: "AT69YyFAmMObhORGHV4"
                                },
                                "1511920": {
                                    result: true,
                                    hash: "AT6pY2ROWoYnl3_cKfc"
                                },
                                "676811": {
                                    result: false,
                                    hash: "AT4zC0IqvJCbKsUe6Qw"
                                },
                                "676812": {
                                    result: true,
                                    hash: "AT6FULe6g-qrrrQdoGE"
                                },
                                "820050": {
                                    result: true,
                                    hash: "AT7bjlcFFlowDw-SUPE"
                                },
                                "985697": {
                                    result: false,
                                    hash: "AT6gOJD7fT0UjmgDZWs"
                                },
                                "148": {
                                    result: false,
                                    hash: "AT5V6Me6WVwsRI3wUFw"
                                },
                                "5525": {
                                    result: false,
                                    hash: "AT56gpXxsmc6rAjx8Cg"
                                },
                                "2223": {
                                    result: false,
                                    hash: "AT4s3JaAt9nQ6ucmw-s"
                                },
                                "2341": {
                                    result: false,
                                    hash: "AT7nNd913_uqf_cROxs"
                                },
                                "726410": {
                                    result: true,
                                    hash: "AT7w-jbTa3ueodj3W8E"
                                },
                                "5541": {
                                    result: true,
                                    hash: "AT70V-Q_zfEykznOvHg"
                                },
                                "676781": {
                                    result: true,
                                    hash: "AT4-DnA47xPbjtkw9pc"
                                },
                                "862436": {
                                    result: true,
                                    hash: "AT7YsAcWL8-1WZrOjlU"
                                },
                                "1099893": {
                                    result: false,
                                    hash: "AT5kly2LSZV_DKGR_b0"
                                },
                                "3499": {
                                    result: true,
                                    hash: "AT5l5tI3kdeSuUxU7cw"
                                },
                                "12": {
                                    result: false,
                                    hash: "AT7MdxfOMhMQYcz0MdU"
                                },
                                "729631": {
                                    result: false,
                                    hash: "AT7b0tj8AHWG5lTF6ds"
                                },
                                "1281505": {
                                    result: false,
                                    hash: "AT4PHZM9gFoypCjQ_yM"
                                },
                                "1291023": {
                                    result: false,
                                    hash: "AT519LseIG1nwq3o12g"
                                },
                                "1294182": {
                                    result: false,
                                    hash: "AT4vd6mwrtAJouEJCsA"
                                },
                                "1399218": {
                                    result: true,
                                    hash: "AT6guCW1eyIkOV1E57s"
                                },
                                "1401060": {
                                    result: true,
                                    hash: "AT5aetN5Gb3reIXVoJ8"
                                },
                                "1485055": {
                                    result: true,
                                    hash: "AT5lkGxmhfrVKlcnHQg"
                                },
                                "1596063": {
                                    result: false,
                                    hash: "AT7JHuDWtaOqRuBUf5s"
                                },
                                "1597642": {
                                    result: true,
                                    hash: "AT78G4fDXhlnMl7oBk8"
                                },
                                "1647260": {
                                    result: false,
                                    hash: "AT4WdkrQSGE5dIsEgjk"
                                },
                                "1695831": {
                                    result: false,
                                    hash: "AT7RA6TJmDFGF-D6pE4"
                                },
                                "1722014": {
                                    result: false,
                                    hash: "AT6_M5gpc6RLrHjcFAI"
                                },
                                "1742795": {
                                    result: false,
                                    hash: "AT6dbnY5JZm_bTINs80"
                                },
                                "1778302": {
                                    result: false,
                                    hash: "AT65fisZhmc2X92EafY"
                                },
                                "1840809": {
                                    result: false,
                                    hash: "AT5nYctoTsr7alRiYd4"
                                },
                                "1848749": {
                                    result: false,
                                    hash: "AT5GsH9Kb-3W-taZsYk"
                                },
                                "1906871": {
                                    result: false,
                                    hash: "AT6dIBiVv9bUDXlm1aw"
                                },
                                "1985945": {
                                    result: false,
                                    hash: "AT66Oo5lY__5wUTpx9c"
                                }
                            },
                            qexData: {
                                "180": {
                                    r: false
                                },
                                "37": {
                                    r: 32592,
                                    l: "J{\"u\":\"mqtt_javascript_connection_reliability_universe\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                                },
                                "129": {
                                    r: false
                                },
                                "130": {
                                    r: 0.72714287415147,
                                    l: "J{\"u\":\"mqtt_javascript_connection_reliability_universe\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                                },
                                "131": {
                                    r: 58,
                                    l: "J{\"u\":\"mqtt_javascript_connection_reliability_universe\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                                },
                                "656": {
                                    r: 13,
                                    l: "J{\"u\":\"mqtt_javascript_connection_reliability_universe\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                                },
                                "657": {
                                    r: 11,
                                    l: "J{\"u\":\"mqtt_javascript_connection_reliability_universe\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                                },
                                "658": {
                                    r: null
                                },
                                "659": {
                                    r: null
                                },
                                "660": {
                                    r: 23,
                                    l: "J{\"u\":\"mqtt_javascript_connection_reliability_universe\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                                },
                                "91": {
                                    r: false,
                                    l: "J{\"u\":\"weblite_hybrid_experiments\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                                },
                                "123": {
                                    r: false,
                                    l: "J{\"u\":\"weblite_hybrid_experiments\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                                },
                                "648": {
                                    r: false
                                },
                                "650": {
                                    r: 50
                                },
                                "651": {
                                    r: 300
                                },
                                "644": {
                                    r: null,
                                    l: "J{\"u\":\"react_core_www\",\"t\":\"fb\",\"gks\":[],\"qe\":null}"
                                },
                                "647": {
                                    r: false
                                }
                            }
                        },
                        hblp: {
                            consistency: {
                                rev: 1005458846
                            },
                            rsrcMap: {
                                "1GzRKWC": {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/7ZTAS_IXym8.js?_nc_x=WuaycbPD3fM"
                                },
                                Y4lbDRg: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/sYYyXC4CHgC.js?_nc_x=WuaycbPD3fM"
                                },
                                lZZnVFH: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/ngoBhFBLB-O.js?_nc_x=WuaycbPD3fM"
                                },
                                OHEGYjU: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3iYkn4/y5/l/ar_AR/t0-jWnSb5kU.js?_nc_x=WuaycbPD3fM"
                                },
                                WGcipqh: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3io6V4/yL/l/ar_AR/I2njiTJ3hfM.js?_nc_x=WuaycbPD3fM"
                                },
                                FJqL2Al: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/ilMFccLWbov.js?_nc_x=WuaycbPD3fM"
                                },
                                LDIkPnS: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/15uhUaJmu1X.js?_nc_x=WuaycbPD3fM"
                                },
                                qwAZCkc: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3ifyO4/yn/l/ar_AR/IPFXibTBn5v.js?_nc_x=WuaycbPD3fM"
                                },
                                eJUoigY: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yT/r/I4Wi6-E1wEM.js?_nc_x=WuaycbPD3fM"
                                },
                                y5R9Kzo: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3iv4K4/yX/l/ar_AR/Z1PwxLwHQIv.js?_nc_x=WuaycbPD3fM"
                                },
                                Dtm1pob: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/yXt1Xv4KMxp.js?_nc_x=WuaycbPD3fM"
                                },
                                IsQZRlw: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/4BPoa6O0wJm.js?_nc_x=WuaycbPD3fM"
                                },
                                bJ922yg: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=WuaycbPD3fM"
                                },
                                "1ih2ab9": {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/uV2pLymJUjk.js?_nc_x=WuaycbPD3fM"
                                },
                                UhokUEz: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/mTkajjYT_UK.js?_nc_x=WuaycbPD3fM"
                                },
                                "HP/29fz": {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3iz-e4/yZ/l/ar_AR/mYVEFMRpzOI.js?_nc_x=WuaycbPD3fM"
                                },
                                "1edwtKw": {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/znMTYgF6QdU.js?_nc_x=WuaycbPD3fM"
                                },
                                "8ELCBwH": {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/VRzSVH5iU-V.js?_nc_x=WuaycbPD3fM"
                                },
                                "pE8e/jE": {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3i8Eb4/yJ/l/ar_AR/Lhq8d5tJSTq.js?_nc_x=WuaycbPD3fM"
                                },
                                TUxV68S: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/AEurEMwqHIo.js?_nc_x=WuaycbPD3fM"
                                }
                            },
                            compMap: {
                                ODS: {
                                    r: ["1GzRKWC"],
                                    be: 1
                                },
                                MTouchChannelManager: {
                                    r: ["1GzRKWC", "Y4lbDRg", "lZZnVFH", "Ec8roc9", "OHEGYjU", "WGcipqh", "FJqL2Al"],
                                    rds: {
                                        m: ["MqttLongPollingRunner", "BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"]
                                    },
                                    be: 1
                                },
                                TransportSelectingClientSingleton: {
                                    r: ["LDIkPnS", "1GzRKWC"],
                                    rds: {
                                        m: ["ContextualConfig", "BladeRunnerClient", "DGWRequestStreamClient", "MqttLongPollingRunner", "BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"],
                                        r: ["Ec8roc9", "Y4lbDRg", "lZZnVFH", "qwAZCkc", "FJqL2Al"]
                                    },
                                    be: 1
                                },
                                RequestStreamCommonRequestStreamCommonTypes: {
                                    r: ["LDIkPnS"],
                                    be: 1
                                },
                                Cookie: {
                                    r: ["1GzRKWC"],
                                    rds: {
                                        m: ["BanzaiScuba_DEPRECATED"],
                                        r: ["Ec8roc9"]
                                    },
                                    be: 1
                                },
                                WebSpeedInteractionsTypedLogger: {
                                    r: ["1GzRKWC", "TUxV68S", "FJqL2Al", "Ec8roc9"],
                                    rds: {
                                        m: ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"]
                                    },
                                    be: 1
                                },
                                PerfXSharedFields: {
                                    r: ["1GzRKWC"],
                                    be: 1
                                }
                            }
                        }
                    },
                    allResources: ["008SXc6", "VI6O485", "1GzRKWC", "UKa9LUq", "V70tt69", "Ec8roc9", "ePrkCIi", "eJUoigY", "OHEGYjU", "y5R9Kzo", "Dtm1pob", "IsQZRlw", "bJ922yg", "1ih2ab9", "UhokUEz", "HP/29fz", "Y4lbDRg", "lZZnVFH", "1edwtKw", "8ELCBwH", "pE8e/jE", "FJqL2Al", "qwAZCkc"]
                });
            }
            ));
        </script>
        <script>
            requireLazy(["__bigPipe"], function(bigPipe) {
                bigPipe.setPageID("7094159233111244815-0")
            });
            CavalryLogger.setPageID("7094159233111244815-0");
        </script>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y4/l/0,cross/wKMDNCtp2w1.css?_nc_x=WuaycbPD3fM" as="style" crossorigin="anonymous"/>
        <div class="hidden_elem">
            <code id="u_0_s_Im">
            <!-- <div class="_a-5" id="u_0_r_mK"></div> -->
            </code>
        </div>
        <script nonce="6CuhNCnW">
            (function() {
                var n = now_inl();
                requireLazy(["__bigPipe"], function(bigPipe) {
                    bigPipe.beforePageletArrive("m:chrome:schedulable-graph-search", n);
                })
            }
            )();
        </script>
        <script nonce="6CuhNCnW">
            requireLazy(["__bigPipe"], (function(bigPipe) {
                bigPipe.onPageletArrive({
                    displayResources: ["ku5fBxj", "ePrkCIi"],
                    content: {
                        "m:chrome:schedulable-graph-search": {
                            container_id: "u_0_s_Im"
                        }
                    },
                    id: "m:chrome:schedulable-graph-search",
                    phase: 7,
                    last_in_phase: true,
                    last_pagelet: true,
                    all_phases: [63, 7],
                    jsmods: {
                        elements: [["__elem_ad2bcfb1_0_1_Zf", "u_0_r_mK", 1]],
                        require: [["MSearchTypeaheadNeueFlyout", "init", ["MSearchSimplificationNullstateResult", "MSearchSimplificationSeeMoreRecentResultsButton", "MSearchSimplificationTypedResult", "MSearchSimplificationHeader", "__elem_ad2bcfb1_0_1_Zf"], [{
                            typeaheadConfig: {
                                sources: {
                                    bootstrapped: {
                                        src: "/typeahead/search/facebar/bootstrap/?filters%5B0%5D=keyword",
                                        source_key: "facebar3",
                                        max_results: 6
                                    },
                                    nullstate: {
                                        src: "/typeahead/search/facebar/nullstate/",
                                        max_results: 20
                                    },
                                    online: {
                                        src: "/typeahead/search/facebar/query/?context=facebar&grammar_version=bee09f93fa732cfa59a1cb6d9f450d3892424e49&viewer=100006922931632&rsp=search",
                                        max_results: 20,
                                        enable_caching: true
                                    }
                                },
                                typeaheadScubaInfo: null,
                                disableLongerQueryCacheHit: true,
                                compositeSourceConfig: {
                                    maxResults: 50,
                                    minCostForUserToSurfaceAtTop: 7,
                                    maxPositionOfEntityToDivideKeywords: 5,
                                    maxKeywordAboveEntities: 2,
                                    filterOutTypes: [],
                                    keepBootstrapped: true,
                                    enableLegacyStyleBucketization: true
                                },
                                hasRecentSearches: false,
                                numResultsToFetch: 13,
                                initialNumRecentResultsToShow: 13,
                                defaultNumTopResultsToShow: 3,
                                keywordsOnlyEnabled: true,
                                keywordBucketSize: 6
                            },
                            currentProfileID: 1350,
                            initialQuery: "",
                            activityLogURI: "/100006922931632/allactivity/?category_key=search&entry_point=edit_search_history",
                            groupName: "",
                            behaviors: [],
                            renderers: {
                                NullstateResult: {
                                    __m: "MSearchSimplificationNullstateResult"
                                },
                                SeeMoreRecentResultsButton: {
                                    __m: "MSearchSimplificationSeeMoreRecentResultsButton"
                                },
                                TypedResult: {
                                    __m: "MSearchSimplificationTypedResult"
                                },
                                Header: {
                                    __m: "MSearchSimplificationHeader"
                                }
                            },
                            root: {
                                __m: "__elem_ad2bcfb1_0_1_Zf"
                            }
                        }]], ["RequireDeferredReference", "unblock", [], [["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "MPageControllerImpl", "MPageFetcherImpl", "VisualCompletionGating"], "sd"]], ["RequireDeferredReference", "unblock", [], [["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "MPageControllerImpl", "MPageFetcherImpl", "VisualCompletionGating"], "css"]]]
                    },
                    hsrp: {
                        hblp: {
                            consistency: {
                                rev: 1005458846
                            },
                            rsrcMap: {
                                ku5fBxj: {
                                    type: "css",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/y4/l/0,cross/wKMDNCtp2w1.css?_nc_x=WuaycbPD3fM"
                                },
                                I45ve9W: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3iCjX4/yb/l/ar_AR/kLbhF11qQyy.js?_nc_x=WuaycbPD3fM"
                                },
                                RVW9Ohd: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3i26U4/yt/l/ar_AR/uw4v_mDLjMe.js?_nc_x=WuaycbPD3fM"
                                },
                                jlrs6db: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yu/r/4t3Go6A8wI6.js?_nc_x=WuaycbPD3fM"
                                }
                            }
                        }
                    },
                    allResources: ["ku5fBxj", "ePrkCIi", "Ec8roc9", "1GzRKWC", "OHEGYjU", "I45ve9W", "RVW9Ohd", "jlrs6db", "FJqL2Al"]
                });
            }
            ));
        </script>
        <script nonce="6CuhNCnW">
            (function() {
                var n = now_inl();
                requireLazy(["__bigPipe"], function(bigPipe) {
                    bigPipe.beforePageletArrive("last_response", n);
                })
            }
            )();
        </script>
        <script nonce="6CuhNCnW">
            requireLazy(["__bigPipe"], (function(bigPipe) {
                bigPipe.onPageletArrive({
                    id: "last_response",
                    phase: 63,
                    last_in_phase: true,
                    the_end: true,
                    jsmods: {
                        define: [["cr:334", ["ghlTestUBTFacebook"], {
                            __rc: ["ghlTestUBTFacebook", "Aa3t4DgXNa2fCx3uNzxEGz6DrKnWPL0CmVewiXge61GjlOdX-lsya0qycA15mrCqT45IYK6mTx1UUdVu44zmuMQOOg"]
                        }, -1], ["cr:1088657", [], {
                            __rc: [null, "Aa3rbSP_NPVLFO3EBi2GZr30VC6d1Xf62xsGZHTs6dr1AmpODAt9niheRlUR709zc0cDRRQw9-KlZZHU7JGda3E"]
                        }, -1], ["cr:1543261", [], {
                            __rc: [null, "Aa2epI1HfhW6_R4XEtbGtX9T6zFKUThugqdw8Jsn1PcfGfatV04XiprAXMbTG6ci_gKBlWvlhp3gN0nR5b_6NVHh"]
                        }, -1], ["cr:1108857", [], {
                            __rc: [null, "Aa0AInUXvxiLVcqVmE_eTwgZPsG5XmKpOuPYNfZpHPvjd32o1VPWPXtq873fnVlXNKZc732Bv5pGwIGdfQ"]
                        }, -1], ["cr:1294158", ["React.classic"], {
                            __rc: ["React.classic", "Aa1mf45NOKYJxjlt2eUZGir9bKk7PDPw2JafIOzx8aKUeOt_fuvZRWPqBzuLJbFakdqnFpuKYnaYCeioBBABd1GSfImJ"]
                        }, -1], ["cr:708886", ["EventProfilerImpl"], {
                            __rc: ["EventProfilerImpl", "Aa36qNyRma8HH0m6qYi_Pt0Cj9SgKGxXXAock-s7T-VOKu2k5jT1rtVfsXKxFBbPHt0RsPI0KZyfhhbc4ennUc1q4MU"]
                        }, -1], ["DateFormatConfig", [], {
                            numericDateOrder: ["d", "m", "y"],
                            numericDateSeparator: "/",
                            shortDayNames: ["إثنين", "ثلاثاء", "أربعاء", "خميس", "جمعة", "سبت", "أحد"],
                            timeSeparator: ":",
                            weekStart: 6,
                            formats: {
                                D: "D",
                                "D g:ia": "D h:i A",
                                "D M d": "j F",
                                "D M d, Y": "j F، Y",
                                "D M j": "j F",
                                "D M j, g:ia": "j F h:i A",
                                "D M j, y": "j F، Y",
                                "D M j, Y g:ia": "j F، Y h:i A",
                                "D, M j, Y": "j F Y",
                                "F d": "j F",
                                "F d, Y": "j F، Y",
                                "F g": "j F",
                                "F j": "j F",
                                "F j, Y": "j F، Y",
                                "F j, Y @ g:i A": "j F، Y h:i A",
                                "F j, Y g:i a": "j F، Y h:i A",
                                "F jS": "j F",
                                "F jS, g:ia": "j F h:i A",
                                "F jS, Y": "j F، Y",
                                "F Y": "F، Y",
                                "g A": "h A",
                                "g:i": "h:i A",
                                "g:i A": "h:i A",
                                "g:i a": "h:i A",
                                "g:iA": "h:i A",
                                "g:ia": "h:i A",
                                "g:ia F jS, Y": "j F، Y h:i A",
                                "g:iA l, F jS": "j F، Y h:i A",
                                "g:ia M j": "j F h:i A",
                                "g:ia M jS": "j F h:i A",
                                "g:ia, F jS": "j F h:i A",
                                "g:iA, l M jS": "j F، Y h:i A",
                                "g:sa": "h:i A",
                                "H:I - M d, Y": "j F، Y h:i A",
                                "h:i a": "h:i A",
                                "h:m:s m/d/Y": "d/m/Y h:i:s A",
                                j: "j",
                                "l F d, Y": "j F، Y",
                                "l g:ia": "l g:ia",
                                "l, F d, Y": "j F، Y",
                                "l, F j": "j F",
                                "l, F j, Y": "j F، Y",
                                "l, F jS": "j F",
                                "l, F jS, g:ia": "j F، Y h:i A",
                                "l, M j": "j F",
                                "l, M j, Y": "j F، Y",
                                "l, M j, Y g:ia": "j F، Y h:i A",
                                "M d": "j F",
                                "M d, Y": "j F، Y",
                                "M d, Y g:ia": "j F، Y h:i A",
                                "M d, Y ga": "j F، Y h A",
                                "M j": "j F",
                                "M j, Y": "j F، Y",
                                "M j, Y g:i A": "j F، Y h:i A",
                                "M j, Y g:ia": "j F، Y h:i A",
                                "M jS, g:ia": "j F h:i A",
                                "M Y": "F، Y",
                                "M y": "j F",
                                "m-d-y": "d/m/Y",
                                "M. d": "j F",
                                "M. d, Y": "j F، Y",
                                "j F Y": "j F Y",
                                "m.d.y": "d/m/Y",
                                "m/d": "d/m",
                                "m/d/Y": "d/m/Y",
                                "m/d/y": "d/m/Y",
                                "m/d/Y g:ia": "d/m/Y h:i A",
                                "m/d/y H:i:s": "d/m/Y h:i:s A",
                                "m/d/Y h:m": "d/m/Y h:i:s A",
                                n: "d/m",
                                "n/j": "d/m",
                                "n/j, g:ia": "d/m/Y h:i A",
                                "n/j/y": "d/m/Y",
                                Y: "Y",
                                "Y-m-d": "d/m/Y",
                                "Y/m/d": "d/m/Y",
                                "y/m/d": "d/m/Y",
                                "j F، Y": "j F، Y"
                            },
                            ordinalSuffixes: {
                                "1": "الأول",
                                "2": "الثاني",
                                "3": "الثالث",
                                "4": "الرابع",
                                "5": "الخامس",
                                "6": "السادس",
                                "7": "السابع",
                                "8": "الثامن",
                                "9": "التاسع",
                                "10": "العاشر",
                                "11": "الحادي عشر",
                                "12": "الثاني عشر",
                                "13": "الثالث عشر",
                                "14": "الرابع عشر",
                                "15": "الخامس عشر",
                                "16": "السادس عشر",
                                "17": "السابع عشر",
                                "18": "الثامن عشر",
                                "19": "التاسع عشر",
                                "20": "/",
                                "21": "الحادي والعشرون",
                                "22": "الثاني والعشرون",
                                "23": "الثالث والعشرون",
                                "24": "الرابع والعشرون",
                                "25": "الخامس والعشرون",
                                "26": "السادس والعشرون",
                                "27": "السابع والعشرون",
                                "28": "السابع والعشرون",
                                "29": "التاسع والعشرون",
                                "30": "الثلاثون",
                                "31": "الحادي والثلاثون"
                            }
                        }, 165], ["MMessagesConfig", [], {
                            msite_genie_xma_rendering: true,
                            msgrRegion: "CLN"
                        }, 615], ["CLDRDateRenderingClientRollout", [], {
                            formatDateClientLoggerSamplingRate: 0.0001
                        }, 3003], ["CLDRDateFormatConfig", [], {
                            supportedPHPFormatsKeys: {
                                D: "E",
                                "D g:ia": "Ejm",
                                "D M d": "MMMEd",
                                "D M d, Y": "yMMMEd",
                                "D M j": "MMMEd",
                                "D M j, y": "yMMMEd",
                                "D, M j": "MMMEd",
                                "D, M j, Y": "yMMMEd",
                                "F d": "MMMMd",
                                "F d, Y": "date_long",
                                "F j": "MMMMd",
                                "F j, Y": "date_long",
                                "F j, Y @ g:i A": "dateTime_long_short",
                                "F j, Y g:i a": "dateTime_long_short",
                                "F j, Y @ g:i:s A": "dateTime_long_medium",
                                "F jS": "MMMMd",
                                "F jS, g:ia": "dateTime_long_short",
                                "F jS, Y": "date_long",
                                "F Y": "yMMMM",
                                "g A": "j",
                                "G:i": "time_short",
                                "g:i": "time_short",
                                "g:i a": "time_short",
                                "g:i A": "time_short",
                                "g:i:s A": "time_medium",
                                "g:ia": "time_short",
                                "g:iA": "time_short",
                                "g:ia F jS, Y": "dateTime_long_short",
                                "g:iA l, F jS": "dateTime_full_short",
                                "g:ia M jS": "dateTime_medium_short",
                                "g:ia, F jS": "dateTime_long_short",
                                "g:iA, l M jS": "dateTime_full_short",
                                "h:i a": "time_short",
                                "h:m:s m/d/Y": "dateTime_short_short",
                                j: "d",
                                "j F Y": "date_long",
                                "l F d, Y": "date_full",
                                "l, F d, Y": "date_full",
                                "l, F j": "date_full",
                                "l, F j, Y": "date_full",
                                "l, F jS": "date_full",
                                "l, F jS, g:ia": "dateTime_full_short",
                                "l, M j": "date_full",
                                "l, M j, Y": "date_full",
                                "l, M j, Y g:ia": "dateTime_full_short",
                                "M d": "MMMd",
                                "M d, Y": "date_medium",
                                "M d, Y g:ia": "dateTime_medium_short",
                                "M d, Y ga": "dateTime_medium_short",
                                "M j": "MMMd",
                                "M j, Y": "date_medium",
                                "M j, Y g:i A": "dateTime_medium_short",
                                "M j, Y g:ia": "dateTime_medium_short",
                                "M jS, g:ia": "dateTime_medium_short",
                                "M y": "yMMM",
                                "M Y": "yMMM",
                                "M. d": "MMMd",
                                "M. d, Y": "date_medium",
                                "m/d": "Md",
                                "m/d/Y g:ia": "dateTime_short_short",
                                "m/d/y H:i:s": "dateTime_short_short",
                                n: "M",
                                "n/j": "Md",
                                "n/j, g:ia": "dateTime_short_short",
                                "n/j/y": "date_short",
                                Y: "y"
                            },
                            isLocaleInConfigerator: true,
                            CLDRConfigeratorFormats: {
                                dateFormats: {
                                    full: "EEEE، d MMMM y",
                                    long: "d MMMM y",
                                    medium: "dd‏/MM‏/y",
                                    short: "d‏/M‏/y"
                                },
                                timeFormats: {
                                    full: "h:mm:ss a zzzz",
                                    long: "h:mm:ss a z",
                                    medium: "h:mm:ss a",
                                    short: "h:mm a"
                                },
                                dateTimeFormats: {
                                    full: "{1} {0}",
                                    long: "{1} {0}",
                                    medium: "{1} {0}",
                                    short: "{1} {0}"
                                },
                                availableFormats: {
                                    Bh: "h B",
                                    Bhm: "h:mm B",
                                    Bhms: "h:mm:ss B",
                                    E: "ccc",
                                    EBhm: "E h:mm B",
                                    EBhms: "E h:mm:ss B",
                                    EHm: "E HH:mm",
                                    EHms: "E HH:mm:ss",
                                    Ed: "E، d",
                                    Ehm: "E h:mm a",
                                    Ehms: "E h:mm:ss a",
                                    Gy: "y G",
                                    GyMMM: "MMM y G",
                                    GyMMMEd: "E، d MMM y G",
                                    GyMMMd: "d MMM y G",
                                    H: "HH",
                                    Hm: "HH:mm",
                                    Hms: "HH:mm:ss",
                                    Hmsv: "HH:mm:ss v",
                                    Hmv: "HH:mm v",
                                    M: "L",
                                    MEd: "E، d/M",
                                    MMM: "LLL",
                                    MMMEd: "E، d MMM",
                                    MMMMEd: "E، d MMMM",
                                    "MMMMW-count-few": "الأسبوع W من MMM",
                                    "MMMMW-count-many": "الأسبوع W من MMM",
                                    "MMMMW-count-one": "الأسبوع W من MMM",
                                    "MMMMW-count-other": "الأسبوع W من MMM",
                                    "MMMMW-count-two": "الأسبوع W من MMM",
                                    "MMMMW-count-zero": "الأسبوع W من MMM",
                                    MMMMd: "d MMMM",
                                    MMMd: "d MMM",
                                    MMdd: "dd‏/MM",
                                    Md: "d/‏M",
                                    d: "d",
                                    h: "h a",
                                    hm: "h:mm a",
                                    hms: "h:mm:ss a",
                                    hmsv: "h:mm:ss a v",
                                    hmv: "h:mm a v",
                                    ms: "mm:ss",
                                    y: "y",
                                    yM: "M‏/y",
                                    yMEd: "E، d/‏M/‏y",
                                    yMM: "MM‏/y",
                                    yMMM: "MMM y",
                                    yMMMEd: "E، d MMM y",
                                    yMMMM: "MMMM y",
                                    yMMMd: "d MMM y",
                                    yMd: "d‏/M‏/y",
                                    yQQQ: "QQQ y",
                                    yQQQQ: "QQQQ y",
                                    "yw-count-few": "الأسبوع w من سنة Y",
                                    "yw-count-many": "الأسبوع w من سنة Y",
                                    "yw-count-one": "الأسبوع w من سنة Y",
                                    "yw-count-other": "الأسبوع w من سنة Y",
                                    "yw-count-two": "الأسبوع w من سنة Y",
                                    "yw-count-zero": "الأسبوع w من سنة Y"
                                }
                            },
                            CLDRRegionalConfigeratorFormats: {
                                dateFormats: {
                                    full: "EEEE، d MMMM y",
                                    long: "d MMMM y",
                                    medium: "dd‏/MM‏/y",
                                    short: "d‏/M‏/y"
                                },
                                timeFormats: {
                                    full: "h:mm:ss a zzzz",
                                    long: "h:mm:ss a z",
                                    medium: "h:mm:ss a",
                                    short: "h:mm a"
                                },
                                dateTimeFormats: {
                                    full: "{1} {0}",
                                    long: "{1} {0}",
                                    medium: "{1} {0}",
                                    short: "{1} {0}"
                                },
                                availableFormats: {
                                    Bh: "h B",
                                    Bhm: "h:mm B",
                                    Bhms: "h:mm:ss B",
                                    E: "ccc",
                                    EBhm: "E h:mm B",
                                    EBhms: "E h:mm:ss B",
                                    EHm: "E HH:mm",
                                    EHms: "E HH:mm:ss",
                                    Ed: "E، d",
                                    Ehm: "E h:mm a",
                                    Ehms: "E h:mm:ss a",
                                    Gy: "y G",
                                    GyMMM: "MMM y G",
                                    GyMMMEd: "E، d MMM y G",
                                    GyMMMd: "d MMM y G",
                                    H: "HH",
                                    Hm: "HH:mm",
                                    Hms: "HH:mm:ss",
                                    Hmsv: "HH:mm:ss v",
                                    Hmv: "HH:mm v",
                                    M: "L",
                                    MEd: "E، d/M",
                                    MMM: "LLL",
                                    MMMEd: "E، d MMM",
                                    MMMMEd: "E، d MMMM",
                                    "MMMMW-count-few": "الأسبوع W من MMM",
                                    "MMMMW-count-many": "الأسبوع W من MMM",
                                    "MMMMW-count-one": "الأسبوع W من MMM",
                                    "MMMMW-count-other": "الأسبوع W من MMM",
                                    "MMMMW-count-two": "الأسبوع W من MMM",
                                    "MMMMW-count-zero": "الأسبوع W من MMM",
                                    MMMMd: "d MMMM",
                                    MMMd: "d MMM",
                                    MMdd: "dd‏/MM",
                                    Md: "d/‏M",
                                    d: "d",
                                    h: "h a",
                                    hm: "h:mm a",
                                    hms: "h:mm:ss a",
                                    hmsv: "h:mm:ss a v",
                                    hmv: "h:mm a v",
                                    ms: "mm:ss",
                                    y: "y",
                                    yM: "M‏/y",
                                    yMEd: "E، d/‏M/‏y",
                                    yMM: "MM‏/y",
                                    yMMM: "MMM y",
                                    yMMMEd: "E، d MMM y",
                                    yMMMM: "MMMM y",
                                    yMMMd: "d MMM y",
                                    yMd: "d‏/M‏/y",
                                    yQQQ: "QQQ y",
                                    yQQQQ: "QQQQ y",
                                    "yw-count-few": "الأسبوع w من سنة Y",
                                    "yw-count-many": "الأسبوع w من سنة Y",
                                    "yw-count-one": "الأسبوع w من سنة Y",
                                    "yw-count-other": "الأسبوع w من سنة Y",
                                    "yw-count-two": "الأسبوع w من سنة Y",
                                    "yw-count-zero": "الأسبوع w من سنة Y"
                                }
                            },
                            CLDRToPHPSymbolConversion: {
                                yyyy: "Y",
                                yy: "y",
                                y: "Y",
                                MMMMM: "M",
                                MMMM: "F",
                                MMM: "M",
                                MM: "m",
                                M: "n",
                                dd: "d",
                                d: "j",
                                EEEEE: "D",
                                EEEE: "l",
                                EEE: "D",
                                EE: "D",
                                E: "D",
                                aaaaa: "A",
                                aaaa: "A",
                                aaa: "A",
                                aa: "A",
                                a: "A",
                                bbbbb: "A",
                                bbbb: "A",
                                bbb: "A",
                                bb: "A",
                                b: "A",
                                BBBBB: "A",
                                BBBB: "A",
                                BBB: "A",
                                BB: "A",
                                B: "A",
                                HH: "H",
                                H: "G",
                                hh: "h",
                                h: "g",
                                K: "g",
                                mm: "i",
                                ss: "s",
                                z: "",
                                zz: "",
                                zzz: "",
                                ccccc: "D",
                                cccc: "l",
                                ccc: "D",
                                cc: "D",
                                c: "D",
                                LLLLL: "M",
                                LLLL: "f",
                                LLL: "M",
                                LL: "m",
                                L: "n",
                                G: ""
                            },
                            intlDateSpecialChars: {
                                cldrDelimiter: "'",
                                singleQuote: "'",
                                singleQuoteHolder: "*"
                            }
                        }, 3019], ["MqttPublishTimeoutConfig", [], {
                            mqttPublishTimeoutMs: 90000
                        }, 4266], ["IsInternSite", [], {
                            is_intern_site: false
                        }, 4517], ["MqttWebDeviceID", [], {
                            clientID: "5158cae9-80c8-43eb-87fc-57f937d0a4df"
                        }, 5003], ["BrowserPaymentHandlerConfig", [], {
                            enabled: false
                        }, 3904], ["BrowserPushPubKey", [], {
                            appServerKey: "BIBn3E_rWTci8Xn6P9Xj3btShT85Wdtne0LtwNUyRQ5XjFNkuTq9j4MPAVLvAFhXrUU1A9UxyxBA7YIOjqDIDHI"
                        }, 4806], ["cr:1094907", [], {
                            __rc: [null, "Aa3Rk_yxLFf4u69osb4zkgLE93kbpPUrEAVdX6xAi0fd1zqIM2Z9xvp9NiJEQ9-MD64W9qy57wyZ7PhX0iiS734"]
                        }, -1], ["cr:1292365", ["React-prod.classic"], {
                            __rc: ["React-prod.classic", "Aa0AInUXvxiLVcqVmE_eTwgZPsG5XmKpOuPYNfZpHPvjd32o1VPWPXtq873fnVlXNKZc732Bv5pGwIGdfQ"]
                        }, -1], ["EventConfig", [], {
                            sampling: {
                                bandwidth: 0,
                                play: 0,
                                playing: 0,
                                progress: 0,
                                pause: 0,
                                ended: 0,
                                seeked: 0,
                                seeking: 0,
                                waiting: 0,
                                loadedmetadata: 0,
                                canplay: 0,
                                selectionchange: 0,
                                change: 0,
                                timeupdate: 0,
                                adaptation: 0,
                                focus: 0,
                                blur: 0,
                                load: 0,
                                error: 0,
                                message: 0,
                                abort: 0,
                                storage: 0,
                                scroll: 200000,
                                mousemove: 20000,
                                mouseover: 10000,
                                mouseout: 10000,
                                mousewheel: 1,
                                MSPointerMove: 10000,
                                keydown: 0.1,
                                click: 0.02,
                                mouseup: 0.02,
                                __100ms: 0.001,
                                __default: 5000,
                                __min: 100,
                                __interactionDefault: 200,
                                __eventDefault: 100000
                            },
                            page_sampling_boost: 1,
                            interaction_regexes: {},
                            interaction_boost: {},
                            event_types: {},
                            manual_instrumentation: false,
                            profile_eager_execution: false,
                            disable_heuristic: true,
                            disable_event_profiler: false
                        }, 1726], ["MqttWebConfig", [], {
                            fbid: "100006922931632",
                            appID: 219994525426954,
                            endpoint: "wss://edge-chat.facebook.com/chat?region=cln",
                            pollingEndpoint: "https://edge-chat.facebook.com/mqtt/pull?region=cln",
                            subscribedTopics: [],
                            capabilities: 10,
                            clientCapabilities: 3,
                            chatVisibility: true,
                            hostNameOverride: ""
                        }, 3790], ["MarauderConfig", [], {
                            app_version: "1.0.0.0 (1005458846)",
                            gk_enabled: false
                        }, 31], ["SearchMTouchGlobalOptions", [], {
                            enableSeeMore: true,
                            enableQueryThrottle: true,
                            queryThrottleTime: 125,
                            queryWaitTime: 125,
                            enableEagerSendRequest: true,
                            useBanzaiLogging: false,
                            redirectPages: false,
                            noSnippet: false,
                            defaultNumTopResultsToShow: 3,
                            useNewTypeaheadPerfLogger: true,
                            keywordsOnlyEnabled: true,
                            prefixMatchEntityBootstrap: true,
                            disableHighlighting: false
                        }, 344], ["TimeSliceInteractionSV", [], {
                            on_demand_reference_counting: true,
                            on_demand_profiling_counters: true,
                            default_rate: 1000,
                            lite_default_rate: 100,
                            interaction_to_lite_coinflip: {
                                ADS_INTERFACES_INTERACTION: 0,
                                ads_perf_scenario: 0,
                                ads_wait_time: 0,
                                Event: 10
                            },
                            interaction_to_coinflip: {
                                ADS_INTERFACES_INTERACTION: 1,
                                ads_perf_scenario: 1,
                                ads_wait_time: 1,
                                Event: 500
                            },
                            enable_heartbeat: true,
                            maxBlockMergeDuration: 0,
                            maxBlockMergeDistance: 0,
                            enable_banzai_stream: true,
                            user_timing_coinflip: 50,
                            banzai_stream_coinflip: 0,
                            compression_enabled: true,
                            ref_counting_fix: false,
                            ref_counting_cont_fix: false,
                            also_record_new_timeslice_format: false,
                            force_async_request_tracing_on: false
                        }, 2609], ["MBootstrapCacheMaxCacheTime", [], {
                            maxCacheTimeByKey: {
                                typeahead_facebar3: 1209600000,
                                typeahead_search_bem3: 1209600000
                            }
                        }, 2886], ["MSearchTypeaheadConfig", [], {
                            sources: {
                                bootstrapped: {
                                    src: "/typeahead/search/facebar/bootstrap/?filters%5B0%5D=keyword",
                                    source_key: "facebar3",
                                    max_results: 6
                                },
                                nullstate: {
                                    src: "/typeahead/search/facebar/nullstate/",
                                    max_results: 20
                                },
                                online: {
                                    src: "/typeahead/search/facebar/query/?context=facebar&grammar_version=bee09f93fa732cfa59a1cb6d9f450d3892424e49&viewer=100006922931632&rsp=search",
                                    max_results: 20,
                                    enable_caching: true
                                }
                            },
                            typeaheadScubaInfo: null,
                            disableLongerQueryCacheHit: true,
                            compositeSourceConfig: {
                                maxResults: 50,
                                minCostForUserToSurfaceAtTop: 7,
                                maxPositionOfEntityToDivideKeywords: 5,
                                maxKeywordAboveEntities: 2,
                                filterOutTypes: [],
                                keepBootstrapped: true,
                                enableLegacyStyleBucketization: true
                            },
                            hasRecentSearches: false,
                            numResultsToFetch: 13,
                            initialNumRecentResultsToShow: 13,
                            defaultNumTopResultsToShow: 3,
                            keywordsOnlyEnabled: true,
                            keywordBucketSize: 6
                        }, 4113], ["IntlCurrentLocale", [], {
                            code: "ar_AR"
                        }, 5954], ["KillabyteProfilerConfig", [], {
                            htmlProfilerModule: null,
                            profilerModule: null,
                            depTypes: {
                                BL: "bl",
                                NON_BL: "non-bl"
                            }
                        }, 1145], ["QuicklingConfig", [], {
                            version: "1005458846;0;",
                            sessionLength: 30,
                            inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                            badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                            logRefreshOverhead: false
                        }, 60]],
                        require: [["NavigationMetrics", "setPage", [], [{
                            page: "/flib/init/zeusgodofthunder/__entrypoint.php",
                            page_type: "normal",
                            page_uri: "https://m.facebook.com/1350/f",
                            serverLID: "7094159233111244815-0"
                        }]], ["CavalryLoggerImpl", "startInstrumentation", [], []], ["Artillery", "disable", [], []], ["ServiceWorkerURLCleaner", "removeRedirectID", [], []]]
                    },
                    hsrp: {
                        hblp: {
                            consistency: {
                                rev: 1005458846
                            },
                            rsrcMap: {
                                t1KEUNA: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/iKgpIo60Hl6.js?_nc_x=WuaycbPD3fM"
                                },
                                FEt5GzN: {
                                    type: "js",
                                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/KWY7Edb5_DT.js?_nc_x=WuaycbPD3fM"
                                }
                            }
                        }
                    },
                    allResources: ["1GzRKWC", "t1KEUNA", "FEt5GzN", "UhokUEz", "Ec8roc9"],
                    onload: ["CavalryLogger.getInstance(\"7094159233111244815-0\").setTTIEvent(\"t_domcontent\");"],
                    onafterload: ["window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");", "if (window.ExitTime){CavalryLogger.getInstance(\"7094159233111244815-0\").setValue(\"t_exit\", window.ExitTime);};"]
                });
            }
            ));
        </script>
    </body>
</html>
