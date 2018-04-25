

/*FIXED*/
$(document).ready(function () {
    var altura = $('.contenedor_top').offset().top;
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > altura) {
            $('.contenedor_top').addClass('efecto-menu');
        } else {
            $('.contenedor_top').removeClass('efecto-menu');
        }
    });

});



$('#btn-menu').on('click', function () {
    $('#nav').toggleClass('movimiento');
});




jQuery(function (t) {
    var n, e, i, o, r, s, a, u, l, h, c, p, d, f, g, m, v, y, $, w, C, x, k, b, T, I, H, M, P, S, z, O, q, A, F, L, B, D, N, V, E, K, _;
    return K = t(window), z = t(document), window.App = {}, n = t("body, html"), o = t("#header"), s = t("#headerPush"), i = t("#footer"), O = "easeInOutExpo", k = "/wp-content/themes/KIND", b = 39, C = 37, P = 38, v = 40, y = 27, N = navigator.userAgent, q = N.match(/(Android|iPhone|BlackBerry|Opera Mini)/i), A = N.match(/(iPad|Kindle)/i), E = function () {
        return window.innerHeight || K.height()
    }, _ = function () {
        return window.innerWidth || K.width()
    }, V = function (t) {
        return K.resize(function () {
            return t()
        }), K.bind("orientationchange", function () {
            return t()
        })
    }, r = o.find(".button"), m = o.find("#trueHeader"), D = m.outerHeight(), L = 0 === t("#masthead").length && 0 === t("#slideshow").length, B = m.offset().top, F = B + 5 * D, setInterval(function () {
        var t;
        return t = K.scrollTop(), o.css({
            height: o.outerHeight()
        }), t >= B ? (o.addClass("sticky"), 0 >= B || r.hasClass("inv") && r.removeClass("transparent inv")) : (o.removeClass("sticky"), 0 >= B || r.hasClass("inv") || r.addClass("transparent inv")), t >= F ? o.addClass("condensed") : o.removeClass("condensed")
    }, 10), 1 === (c = t("#slideshow")).length && (I = function () {
        function t() {
            this.$slideshow = c, this.$slides = this.$slideshow.find(".slide"), this.max = this.$slides.length - 1
        }
        return t.prototype.autoplay = function () {
            var t = this;
            if (0 !== this.max) return this.interval = setInterval(function () {
                return t.next()
            }, 6e3), this
        }, t.prototype.clear = function () {
            return clearInterval(this.interval)
        }, t.prototype.goToSlide = function (t) {
            var n, e, i = this;
            if (t !== this.current) return null != this.interval && this.clear(), t > this.max && (t = 0), 0 > t && (t = this.max), this.$slides.removeClass("active"), this.$slides.eq(t).addClass("active"), this.$h2 = this.$slides.eq(t).find("h2"), setTimeout(function () {
                return i.typeOutSteps()
            }, 1e3), (n = this.$slides.eq(t).find(".product_pledged")) && (e = Math.round(parseInt(n.text())), n.text(("" + e).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")), n.css({
                opacity: 1
            })), this.current = t, this.autoplay(), this
        }, t.prototype.next = function () {
            return this.goToSlide(this.current + 1)
        }, t.prototype.prev = function () {
            return this.goToSlide(this.current - 1)
        }, t.prototype.typeOutSteps = function () {
            var t, n, e, i, o, r, s = this;
            return n = 0, i = this.$h2.data().sequences.split(","), t = e = i[n], r = function (r) {
                var a, u;
                return null == r && (r = 0), n !== i.length ? (u = 0, a = function () {
                    var l;
                    return r++, l = t.substring(0, r), s.$h2.text(l), s.$h2.addClass("typing"), clearInterval(u), r !== t.length ? u = setInterval(a, s.human()) : (n++, s.$h2.removeClass("typing"), n !== i.length ? (r = 0, e = t, t = i[n], setTimeout(o, s.human(10))) : void 0)
                }, a()) : void 0
            }, r(), o = function () {
                var n, i, o, a, u, l, h, c, p, d, f, g;
                for (a = e.split(" "), n = t.split(" "), p = "", l = 0, c = f = 0, g = a.length; g > f; c = ++f) d = a[c], d === n[c] && (l++, l > c && (p += d + " "));
                return u = t.length, h = p.length > 0 ? p.length - 1 : 0, o = 0, i = function () {
                    var t;
                    return t = e.substring(0, u), s.$h2.text(t), s.$h2.addClass("typing"), u--, clearInterval(o), u === h ? (s.$h2.removeClass("typing"), setTimeout(function () {
                        return r(h)
                    }, s.human(5))) : o = setInterval(i, s.human())
                }, i()
            }, this
        }, t.prototype.human = function (t) {
            return null == t && (t = 1), Math.round(170 * Math.random() + 30) * t
        }, t
    }(), T = new I, setTimeout(function () {
        return T.goToSlide(0)
    }, 100), t("#slideDecor").bind("click tap", function () {
        return n.stop(1, 1).animate({
            scrollTop: t("#content").offset().top - 100
        }, 660, O)
    }), f = t("#theVideo"), t("#slideshow .button.transparent").on("click tap", function (t) {
        return t.preventDefault(), n.stop(1, 1).animate({
            scrollTop: f.offset().top - o.outerHeight()
        }, 450, function () {
            return S(f.find("iframe"))
        })
    })), Modernizr.csstransitions && (l = t("[data-parallax]")).length >= 1 && K.bind("load scroll touchmove", function () {
        var t, n, e;
        return e = K.scrollTop(), n = parseFloat(.35 * e), n -= 148 - n, t = "center " + n + "px", l.css({
            backgroundPosition: t
        })
    }), 1 === (g = t("#timeline")).length && (M = function () {
        function n() {
            this.$timeline = g, this.$fx = this.$timeline.find("#timelineFx"), this.$items = this.$timeline.find("article")
        }
        return n.prototype.checkPosition = function (n) {
            return null == n && (n = K.scrollTop()), this.$items.each(function (e, i) {
                var o;
                return i = t(i), o = i.offset().top, n >= o - K.height() ? i.css({
                    opacity: 1
                }) : void 0
            }), this
        }, n.prototype.resizeFx = function () {
            var t;
            if (null != this.$timeline) return t = this.$timeline.outerHeight(), t -= this.$timeline.find("article:visible:last-child").outerHeight(), this.$fx.css({
                height: t
            }), this
        }, n
    }(), H = new M, K.load(function () {
        return H.resizeFx()
    }), setInterval(function () {
        return H.checkPosition()
    }, 100)), w = function () {
        function t() {
            this.zoom = 15, this.lat = 30.191969, this.long = -98.084782
        }
        return t.prototype.init = function () {
            return this.map = new GMaps({
                div: "#mapCanvas",
                zoom: this.zoom,
                lat: this.lat,
                lng: this.long,
                zoomControlOpt: {
                    style: "SMALL",
                    position: "TOP_LEFT"
                },
                zoomControl: !0,
                panControl: !0,
                streetViewControl: !0,
                mapTypeControl: !1,
                scrollwheel: !1
            }), this.addMarker(), this
        }, t.prototype.addMarker = function () {
            return this.map.addMarker({
                lat: this.lat,
                lng: this.long,
                icon: k + "/assets/images/icon-marker.png"
            }), this
        }, t
    }(), 1 === (u = t("#mapCanvas")).length && ($ = new w, window.onload = function () {
        return $.init()
    }, K.bind("load resize", function () {
        var t;
        return t = K.height() - o.outerHeight() + 72, 888 > t && (t = 888), u.css({
            height: t
        }), $.map.setCenter($.lat, $.long)
    })), 1 === (e = t("#faqListing")).length && e.find(".faqs").isotope({
        itemSelector: ".faq"
    }), (p = t(".specs")).length >= 1 && p.each(function () {
        var n, e, i;
        return i = t(this), e = i.find("figure"), n = i.find("aside"), e.next().is("aside") && e.outerHeight() < n.outerHeight() ? e.css({
            height: n.outerHeight() + 50
        }) : void 0
    }), 1 === (d = t("#thePosts")).length && d.infinitescroll({
        navSelector: "#postNav",
        nextSelector: "#postNav a:first-child",
        itemSelector: "#thePosts .post"
    }), 1 === (h = t("#popup")).length && (x = function () {
        function n() {
            var n = this;
            this.$popup = h, this.$content = this.$popup.find("#popupContent"), this.$popup.add(t("#close")).bind("click tap", function () {
                return n.close()
            }), this.$content.bind("click tap", function (t) {
                return t.stopPropagation()
            }), K.bind("keydown", function (t) {
                return t.keyCode === y ? n.close() : void 0
            }), this.$content.find("a").bind("click tap", function () {
                return window.location = t(this).attr("href")
            })
        }
        return n.prototype.open = function (n) {
            var e = this;
            return t("#popupContent-load").empty().append(t(n).html()), this.$popup.stop(1, 1).fadeIn(750, function () {
                var t;
                return 1 === (t = e.$popup.find("iframe")).length ? S(t) : void 0
            }), this
        }, n.prototype.close = function () {
            var t = this;
            return this.$popup.stop(1, 1).fadeOut(750, function () {
                return t.$popup.find("#popupContent-load").empty()
            }), this
        }, n
    }(), window.App.PopupModal = new x), S = function (t) {
        var n, e;
        return n = t[0], e = n.src, e.match(/autoplay/) ? (n.src = e.replace("autoplay=0", "autoplay=1"), console.log(n.src)) : n.src += 0 > e.indexOf("?") ? "?autoplay=1" : "&autoplay=1"
    }, t('[data-action="revealVideo"]').on("click tap", function () {
        var n, e, i;
        return i = t(this), e = i.parents("figure"), n = e.find("iframe"), n.addClass("over"), S(n)
    }), t("iframe:not(.skip)").each(function (n, e) {
        var i, o;
        return e = t(this)[0], o = "wmode=transparent", i = e.src, e.src += 0 > i.indexOf("?") ? "?" + o : "&" + o
    }), 1 === (a = t(".id-widget-wrap .main-btn")).length ? (a.text("Back Us"), a.css({
        opacity: 1
    })) : void 0;
    
    
    
});

