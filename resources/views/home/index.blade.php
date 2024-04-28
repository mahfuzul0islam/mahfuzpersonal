<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/mighty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Feb 2024 21:54:17 GMT -->

<head>
    <title>Mahfuz @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bs 5  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('forntend/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('forntend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('forntend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('forntend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('forntend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('forntend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('forntend/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('forntend/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('forntend/css/style.css') }}">


    <script nonce="3b9b4f92-8ea6-4708-b42b-9f38dabfe4af">
        try {
            (function(w, d) {
                ! function(ct, cu, cv, cw) {
                    ct[cv] = ct[cv] || {};
                    ct[cv].executed = [];
                    ct.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    ct.zaraz.q = [];
                    ct.zaraz._f = function(cx) {
                        return async function() {
                            var cy = Array.prototype.slice.call(arguments);
                            ct.zaraz.q.push({
                                m: cx,
                                a: cy
                            })
                        }
                    };
                    for (const cz of ["track", "set", "debug"]) ct.zaraz[cz] = ct.zaraz._f(cz);
                    ct.zaraz.init = () => {
                        var cA = cu.getElementsByTagName(cw)[0],
                            cB = cu.createElement(cw),
                            cC = cu.getElementsByTagName("title")[0];
                        cC && (ct[cv].t = cu.getElementsByTagName("title")[0].text);
                        ct[cv].x = Math.random();
                        ct[cv].w = ct.screen.width;
                        ct[cv].h = ct.screen.height;
                        ct[cv].j = ct.innerHeight;
                        ct[cv].e = ct.innerWidth;
                        ct[cv].l = ct.location.href;
                        ct[cv].r = cu.referrer;
                        ct[cv].k = ct.screen.colorDepth;
                        ct[cv].n = cu.characterSet;
                        ct[cv].o = (new Date).getTimezoneOffset();
                        if (ct.dataLayer)
                            for (const cG of Object.entries(Object.entries(dataLayer).reduce(((cH, cI) => ({
                                    ...cH[1],
                                    ...cI[1]
                                })), {}))) zaraz.set(cG[0], cG[1], {
                                scope: "page"
                            });
                        ct[cv].q = [];
                        for (; ct.zaraz.q.length;) {
                            const cJ = ct.zaraz.q.shift();
                            ct[cv].q.push(cJ)
                        }
                        cB.defer = !0;
                        for (const cK of [localStorage, sessionStorage]) Object.keys(cK || {}).filter((cM => cM
                            .startsWith("_zaraz_"))).forEach((cL => {
                            try {
                                ct[cv]["z_" + cL.slice(7)] = JSON.parse(cK.getItem(cL))
                            } catch {
                                ct[cv]["z_" + cL.slice(7)] = cK.getItem(cL)
                            }
                        }));
                        cB.referrerPolicy = "origin";
                        cB.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(ct[
                            cv])));
                        cA.parentNode.insertBefore(cB, cA)
                    };
                    ["complete", "interactive"].includes(cu.readyState) ? zaraz.init() : ct.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    @yield('home')
    <!-- bs 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="{{asset('forntend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('forntend/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('forntend/js/popper.min.js')}}"></script>
    <script src="{{asset('forntend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('forntend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('forntend/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('forntend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('forntend/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('forntend/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('forntend/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('forntend/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('forntend/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('forntend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('forntend/js/aos.js')}}"></script>
    <script src="{{asset('forntend/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"85bb6d11be16ba5b","b":1,"version":"2024.2.1","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/mighty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Feb 2024 21:54:55 GMT -->

</html>
