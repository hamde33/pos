("use strict");
$(window).on("load", function() {
    $(".loader").fadeOut("slow");
});

feather.replace();
// Global
$(function() {
    let sidebar_nicescroll_opts = {
            cursoropacitymin: 0,
            cursoropacitymax: 0.8,
            zindex: 892
        },
        now_layout_class = null;

    var sidebar_sticky = function() {
        if ($("body").hasClass("layout-2")) {
            $("body.layout-2 #sidebar-wrapper").stick_in_parent({
                parent: $("body")
            });
            $("body.layout-2 #sidebar-wrapper").stick_in_parent({
                recalc_every: 1
            });
        }
    };
    sidebar_sticky();

    var sidebar_nicescroll;
    var update_sidebar_nicescroll = function() {
        let a = setInterval(function() {
            if (sidebar_nicescroll != null) sidebar_nicescroll.resize();
        }, 10);

        setTimeout(function() {
            clearInterval(a);
        }, 600);
    };

    var sidebar_dropdown = function() {
        if ($(".main-sidebar").length) {
            $(".main-sidebar").niceScroll(sidebar_nicescroll_opts);
            sidebar_nicescroll = $(".main-sidebar").getNiceScroll();

            $(".main-sidebar .sidebar-menu li a.has-dropdown")
                .off("click")
                .on("click", function() {
                    var me = $(this);

                    me.parent()
                        .find("> .dropdown-menu")
                        .slideToggle(500, function() {
                            update_sidebar_nicescroll();
                            return false;
                        });
                    return false;
                });
        }
    };
    sidebar_dropdown();

    if ($("#top-5-scroll").length) {
        $("#top-5-scroll")
            .css({
                height: 315
            })
            .niceScroll();
    }
    if ($("#scroll-new").length) {
        $("#scroll-new")
            .css({
                height: 200
            })
            .niceScroll();
    }

    $(".main-content").css({
        minHeight: $(window).outerHeight() - 95
    });

    $(".nav-collapse-toggle").click(function() {
        $(this)
            .parent()
            .find(".navbar-nav")
            .toggleClass("show");
        return false;
    });

    $(document).on("click", function(e) {
        $(".nav-collapse .navbar-nav").removeClass("show");
    });

    var toggle_sidebar_mini = function(mini) {
        let body = $("body");

        if (!mini) {
            body.removeClass("sidebar-mini");
            $(".main-sidebar").css({
                overflow: "hidden"
            });
            setTimeout(function() {
                $(".main-sidebar").niceScroll(sidebar_nicescroll_opts);
                sidebar_nicescroll = $(".main-sidebar").getNiceScroll();
            }, 500);
            $(".main-sidebar .sidebar-menu > li > ul .dropdown-title").remove();
            $(".main-sidebar .sidebar-menu > li > a").removeAttr("data-toggle");
            $(".main-sidebar .sidebar-menu > li > a").removeAttr(
                "data-original-title"
            );
            $(".main-sidebar .sidebar-menu > li > a").removeAttr("title");
        } else {
            body.addClass("sidebar-mini");
            body.removeClass("sidebar-show");
            sidebar_nicescroll.remove();
            sidebar_nicescroll = null;
            $(".main-sidebar .sidebar-menu > li").each(function() {
                let me = $(this);

                if (me.find("> .dropdown-menu").length) {
                    me.find("> .dropdown-menu").hide();
                    me.find("> .dropdown-menu").prepend(
                        '<li class="dropdown-title pt-3">' +
                            me.find("> a").text() +
                            "</li>"
                    );
                } else {
                    // me.find("> a").attr("data-toggle", "tooltip");
                    // me.find("> a").attr("data-original-title", me.find("> a").text());
                    // $("[data-toggle='tooltip']").tooltip({
                    //   placement: "right"
                    // });
                }
            });
        }
    };

    // sticky header toggle function
    var toggle_sticky_header = function(sticky) {
        if (!sticky) {
            $(".main-navbar")[0].classList.remove("sticky");
        } else {
            $(".main-navbar")[0].classList += " sticky";
        }
    };

    $(".menu-toggle").on("click", function(e) {
        var $this = $(this);
        $this.toggleClass("toggled");
    });

    $.each($(".main-sidebar .sidebar-menu li.active"), function(i, val) {
        var $activeAnchors = $(val).find("a:eq(0)");

        $activeAnchors.addClass("toggled");
        $activeAnchors.next().show();
    });

    $("[data-toggle='sidebar']").click(function() {
        var body = $("body"),
            w = $(window);

        if (w.outerWidth() <= 1024) {
            body.removeClass("search-show search-gone");
            if (body.hasClass("sidebar-gone")) {
                body.removeClass("sidebar-gone");
                body.addClass("sidebar-show");
            } else {
                body.addClass("sidebar-gone");
                body.removeClass("sidebar-show");
            }

            update_sidebar_nicescroll();
        } else {
            body.removeClass("search-show search-gone");
            if (body.hasClass("sidebar-mini")) {
                document.getElementById("Hlogo").style.display = "none";
                // document.getElementById("HlogoBut").style.visibility = "visible";

                changeBack();
                toggle_sidebar_mini(false);
            } else {
                document.getElementById("Hlogo").style.display = "list-item";
                // document.getElementById("HlogoBut").style.visibility = "hidden";
                changeElement();
                toggle_sidebar_mini(true);
            }
        }

        return false;
    });

    var toggleLayout = function() {
        var w = $(window),
            layout_class = $("body").attr("class") || "",
            layout_classes =
                layout_class.trim().length > 0 ? layout_class.split(" ") : "";

        if (layout_classes.length > 0) {
            layout_classes.forEach(function(item) {
                if (item.indexOf("layout-") != -1) {
                    now_layout_class = item;
                }
            });
        }

        if (w.outerWidth() <= 1024) {
            if ($("body").hasClass("sidebar-mini")) {
                toggle_sidebar_mini(false);
                $(".main-sidebar").niceScroll(sidebar_nicescroll_opts);
                sidebar_nicescroll = $(".main-sidebar").getNiceScroll();
            }

            $("body").addClass("sidebar-gone");
            $("body").removeClass(
                "layout-2 layout-3 sidebar-mini sidebar-show"
            );
            $("body")
                .off("click")
                .on("click", function(e) {
                    if (
                        $(e.target).hasClass("sidebar-show") ||
                        $(e.target).hasClass("search-show")
                    ) {
                        $("body").removeClass("sidebar-show");
                        $("body").addClass("sidebar-gone");
                        $("body").removeClass("search-show");
                        update_sidebar_nicescroll();
                    }
                });

            update_sidebar_nicescroll();

            if (now_layout_class == "layout-3") {
                let nav_second_classes = $(".navbar-secondary").attr("class"),
                    nav_second = $(".navbar-secondary");

                nav_second.attr("data-nav-classes", nav_second_classes);
                nav_second.removeAttr("class");
                nav_second.addClass("main-sidebar");

                let main_sidebar = $(".main-sidebar");
                main_sidebar
                    .find(".container")
                    .addClass("sidebar-wrapper")
                    .removeClass("container");
                main_sidebar
                    .find(".navbar-nav")
                    .addClass("sidebar-menu")
                    .removeClass("navbar-nav");
                main_sidebar
                    .find(".sidebar-menu .nav-item.dropdown.show a")
                    .click();
                main_sidebar.find(".sidebar-brand").remove();
                main_sidebar.find(".sidebar-menu").before(
                    $("<div>", {
                        class: "sidebar-brand"
                    }).append(
                        $("<a>", {
                            href: $(".navbar-brand").attr("href")
                        }).html($(".navbar-brand").html())
                    )
                );
                setTimeout(function() {
                    sidebar_nicescroll = main_sidebar.niceScroll(
                        sidebar_nicescroll_opts
                    );
                    sidebar_nicescroll = main_sidebar.getNiceScroll();
                }, 700);

                sidebar_dropdown();
                $(".main-wrapper").removeClass("container");
            }
        } else {
            $("body").removeClass("sidebar-gone sidebar-show");
            if (now_layout_class) $("body").addClass(now_layout_class);

            let nav_second_classes = $(".main-sidebar").attr(
                    "data-nav-classes"
                ),
                nav_second = $(".main-sidebar");

            if (
                now_layout_class == "layout-3" &&
                nav_second.hasClass("main-sidebar")
            ) {
                nav_second.find(".sidebar-menu li a.has-dropdown").off("click");
                nav_second.find(".sidebar-brand").remove();
                nav_second.removeAttr("class");
                nav_second.addClass(nav_second_classes);

                let main_sidebar = $(".navbar-secondary");
                main_sidebar
                    .find(".sidebar-wrapper")
                    .addClass("container")
                    .removeClass("sidebar-wrapper");
                main_sidebar
                    .find(".sidebar-menu")
                    .addClass("navbar-nav")
                    .removeClass("sidebar-menu");
                main_sidebar.find(".dropdown-menu").hide();
                main_sidebar.removeAttr("style");
                main_sidebar.removeAttr("tabindex");
                main_sidebar.removeAttr("data-nav-classes");
                $(".main-wrapper").addClass("container");
                // if(sidebar_nicescroll != null)
                //   sidebar_nicescroll.remove();
            } else if (now_layout_class == "layout-2") {
                $("body").addClass("layout-2");
            } else {
                update_sidebar_nicescroll();
            }
        }
    };
    toggleLayout();
    $(window).resize(toggleLayout);

    $("[data-toggle='search']").click(function() {
        var body = $("body");

        if (body.hasClass("search-gone")) {
            body.addClass("search-gone");
            body.removeClass("search-show");
        } else {
            body.removeClass("search-gone");
            body.addClass("search-show");
        }
    });

    // tooltip
    // $("[data-toggle='tooltip']").tooltip();

    // popover
    $('[data-toggle="popover"]').popover({
        container: "body"
    });

    // Select2
    if (jQuery().select2) {
        $(".select2").select2();
    }

    // Selectric
    if (jQuery().selectric) {
        $(".selectric").selectric({
            disableOnMobile: false,
            nativeOnMobile: false
        });
    }

    $(".notification-toggle").dropdown();
    $(".notification-toggle")
        .parent()
        .on("shown.bs.dropdown", function() {
            $(".dropdown-list-icons").niceScroll({
                cursoropacitymin: 0.3,
                cursoropacitymax: 0.8,
                cursorwidth: 7
            });
        });

    $(".message-toggle").dropdown();
    $(".message-toggle")
        .parent()
        .on("shown.bs.dropdown", function() {
            $(".dropdown-list-message").niceScroll({
                cursoropacitymin: 0.3,
                cursoropacitymax: 0.8,
                cursorwidth: 7
            });
        });

    if (jQuery().summernote) {
        $(".summernote").summernote({
            dialogsInBody: true,
            minHeight: 250
        });
        $(".summernote-simple").summernote({
            dialogsInBody: true,
            minHeight: 150,
            toolbar: [
                ["style", ["bold", "italic", "underline", "clear"]],
                ["font", ["strikethrough"]],
                ["para", ["paragraph"]]
            ]
        });
    }

    // Dismiss function
    $("[data-dismiss]").each(function() {
        var me = $(this),
            target = me.data("dismiss");

        me.click(function() {
            $(target).fadeOut(function() {
                $(target).remove();
            });
            return false;
        });
    });

    // Collapsable
    $("[data-collapse]").each(function() {
        var me = $(this),
            target = me.data("collapse");

        me.click(function() {
            $(target).collapse("toggle");
            $(target).on("shown.bs.collapse", function() {
                me.html('<i class="fas fa-minus"></i>');
            });
            $(target).on("hidden.bs.collapse", function() {
                me.html('<i class="fas fa-plus"></i>');
            });
            return false;
        });
    });

    // Background
    $("[data-background]").each(function() {
        var me = $(this);
        me.css({
            backgroundImage: "url(" + me.data("background") + ")"
        });
    });

    // Custom Tab
    $("[data-tab]").each(function() {
        var me = $(this);

        me.click(function() {
            if (!me.hasClass("active")) {
                var tab_group = $('[data-tab-group="' + me.data("tab") + '"]'),
                    tab_group_active = $(
                        '[data-tab-group="' + me.data("tab") + '"].active'
                    ),
                    target = $(me.attr("href")),
                    links = $('[data-tab="' + me.data("tab") + '"]');

                links.removeClass("active");
                me.addClass("active");
                target.addClass("active");
                tab_group_active.removeClass("active");
            }
            return false;
        });
    });

    // Bootstrap 4 Validation
    $(".needs-validation").submit(function() {
        var form = $(this);
        if (form[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.addClass("was-validated");
    });

    // alert dismissible
    $(".alert-dismissible").each(function() {
        var me = $(this);

        me.find(".close").click(function() {
            me.alert("close");
        });
    });

    if ($(".main-navbar").length) {
    }

    // Image cropper
    $("[data-crop-image]").each(function(e) {
        $(this).css({
            overflow: "hidden",
            position: "relative",
            height: $(this).data("crop-image")
        });
    });

    // Slide Toggle
    $("[data-toggle-slide]").click(function() {
        let target = $(this).data("toggle-slide");

        $(target).slideToggle();
        return false;
    });

    // Dismiss modal
    $("[data-dismiss=modal]").click(function() {
        $(this)
            .closest(".modal")
            .modal("hide");

        return false;
    });

    // Width attribute
    $("[data-width]").each(function() {
        $(this).css({
            width: $(this).data("width")
        });
    });

    // Height attribute
    $("[data-height]").each(function() {
        $(this).css({
            height: $(this).data("height")
        });
    });

    // Chocolat
    if ($(".chocolat-parent").length && jQuery().Chocolat) {
        $(".chocolat-parent").Chocolat();
    }

    // Sortable card
    if ($(".sortable-card").length && jQuery().sortable) {
        $(".sortable-card").sortable({
            handle: ".card-header",
            opacity: 0.8,
            tolerance: "pointer"
        });
    }

    // Daterangepicker
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $(".datepicker").daterangepicker({
                locale: { format: "YYYY-MM-DD" },
                singleDatePicker: true
            });
        }
        if ($(".datetimepicker").length) {
            $(".datetimepicker").daterangepicker({
                locale: { format: "YYYY-MM-DD hh:mm" },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true
            });
        }
        if ($(".daterange").length) {
            $(".daterange").daterangepicker({
                locale: { format: "YYYY-MM-DD" },
                drops: "down",
                opens: "right"
            });
        }
    }

    // Timepicker
    if (jQuery().timepicker && $(".timepicker").length) {
        $(".timepicker").timepicker({
            icons: {
                up: "fas fa-chevron-up",
                down: "fas fa-chevron-down"
            }
        });
    }

    $("#mini_sidebar_setting").on("change", function() {
        var _val = $(this).is(":checked") ? "checked" : "unchecked";
        if (_val === "checked") {
            toggle_sidebar_mini(true);
        } else {
            toggle_sidebar_mini(false);
        }
    });
    $("#sticky_header_setting").on("change", function() {
        if ($(".main-navbar")[0].classList.contains("sticky")) {
            toggle_sticky_header(false);
        } else {
            toggle_sticky_header(true);
        }
    });

    $(".theme-setting-toggle").on("click", function() {
        if ($(".theme-setting")[0].classList.contains("active")) {
            $(".theme-setting")[0].classList.remove("active");
        } else {
            $(".theme-setting")[0].classList += " active";
        }
    });

    // full screen call

    $(document).on("click", ".fullscreen-btn", function(e) {
        if (
            !document.fullscreenElement && // alternative standard method
            !document.mozFullScreenElement &&
            !document.webkitFullscreenElement &&
            !document.msFullscreenElement
        ) {
            // current working methods
            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
            } else if (document.documentElement.msRequestFullscreen) {
                document.documentElement.msRequestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) {
                document.documentElement.webkitRequestFullscreen(
                    Element.ALLOW_KEYBOARD_INPUT
                );
            }
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            }
        }
    });

    // setting sidebar

    $(".settingPanelToggle").on("click", function() {
        $(".settingSidebar").toggleClass("showSettingPanel");
    }),
        $(".page-wrapper").on("click", function() {
            $(".settingSidebar").removeClass("showSettingPanel");
        });

    // close right sidebar when click outside
    var mouse_is_inside = false;
    $(".settingSidebar").hover(
        function() {
            mouse_is_inside = true;
        },
        function() {
            mouse_is_inside = false;
        }
    );

    $("body").mouseup(function() {
        if (!mouse_is_inside)
            $(".settingSidebar").removeClass("showSettingPanel");
    });

    $(".settingSidebar-body").niceScroll();

    // theme change event
    $(".choose-theme li").on("click", function() {
        var bodytag = $("body"),
            selectedTheme = $(this),
            prevTheme = $(".choose-theme li.active").attr("title");

        $(".choose-theme li").removeClass("active"),
            selectedTheme.addClass("active");
        $(".choose-theme li.active").data("theme");

        bodytag.removeClass("theme-" + prevTheme);
        bodytag.addClass("theme-" + $(this).attr("title"));
    });

    // dark light sidebar button setting
    $(".sidebar-color input:radio").change(function() {
        if ($(this).val() == "1") {
            $("body").removeClass("dark-sidebar");
            $("body").addClass("light-sidebar");
        } else {
            $("body").removeClass("light-sidebar");
            $("body").addClass("dark-sidebar");
        }
    });

    // dark light layout button setting
    $(".layout-color input:radio").change(function() {
        if ($(this).val() == "1") {
            $("body").removeClass();
            $("body").addClass("light");
            $("body").addClass("light-sidebar");
            $("body").addClass("theme-white");

            $(".choose-theme li").removeClass("active");
            $(".choose-theme li[title|='white']").addClass("active");
            $(".selectgroup-input[value|='1']").prop("checked", true);
        } else {
            $("body").removeClass();
            $("body").addClass("dark");
            $("body").addClass("dark-sidebar");
            $("body").addClass("theme-black");

            $(".choose-theme li").removeClass("active");
            $(".choose-theme li[title|='black']").addClass("active");
            $(".selectgroup-input[value|='2']").prop("checked", true);
        }
    });

    // restore default to dark theme
    $(".btn-restore-theme").on("click", function() {
        //remove all class from body
        $("body").removeClass();
        jQuery("body").addClass("light");
        jQuery("body").addClass("light-sidebar");
        jQuery("body").addClass("theme-white");

        // set default theme
        $(".choose-theme li").removeClass("active");
        $(".choose-theme li[title|='white']").addClass("active");

        $(".select-layout[value|='1']").prop("checked", true);
        $(".select-sidebar[value|='2']").prop("checked", true);
        toggle_sidebar_mini(false);
        $("#mini_sidebar_setting").prop("checked", false);
        $("#sticky_header_setting").prop("checked", true);
        toggle_sticky_header(true);
    });

    //start up class add

    //add default class on body tag
    jQuery("body").addClass("light");
    jQuery("body").addClass("light-sidebar");
    jQuery("body").addClass("theme-white");
    // set theme default color
    $(".choose-theme li").removeClass("active");
    $(".choose-theme li[title|='white']").addClass("active");
    //set default dark or light layout(1=light, 2=dark)
    $(".select-layout[value|='1']").prop("checked", true);
    //set default dark or light sidebar(1=light, 2=dark)
    $(".select-sidebar[value|='1']").prop("checked", true);
    // sticky header default set to true
    $("#sticky_header_setting").prop("checked", true);
});
// -----------------------------------------------------------------------------MY JS----------------------------------------------------------

function colorOperation(r) {
    var confDialog1 = $("#confColorModal");
    window.confColorModal.showModal();
    document.getElementById("T").onclick = function() {
        addtion_color(r);
    };
}

function changeS(state) {
    var s;
    if (state === "T") {
        s = true;
    } else {
        s = false;
    }
    return s;
}
function admitAdition() {
    return changeS();
}
function changeElement() {
    var el = document.getElementById("gni");
    if (el !== null) el.style.paddingRight = "130px";
}
function changeBack() {
    var el = document.getElementById("gni");
    if (el !== null) el.style.paddingRight = "280px";
}

function showEx() {
    var sho = document.getElementById("extraShow");
    var bsho = document.getElementById("shbutton");
    if (bsho.value === "true") {
        sho.style.display = "block";
        bsho.value = "false";
    } else {
        hideEx();
        bsho.value = "true";
    }
}

function hideEx() {
    document.getElementById("extraShow").style.display = "none";
}
// -----------------------------------------------------------------------------MY JS----------------------------------------------------------
var i = 1;
function addtion_size() {
    var html = '<div id="addtion_color' + i + '"><hr>';
    html +=
        '<div class="content" id="addtion_colorap' +
        i +
        '" style="border-style: groove;padding: 10px;">\
  <span><a onclick="removeSize(addtion_color' +
        i +
        ');" class="badge btn-danger text-light p-2" id="sizeRemove' +
        i +
        '">X</a></span>\
           <div class="row">\
           <div class="col-sm-2 col-12 ">\
           <label class="col-md-12 col-12">الحجم</label>\
           <input type="number" class="col-md-12 col-12 form-control" name="" id=""\
             required="" style="border-color: #9c9c9c;">\
         </div>\
         <div class="col-sm-2 col-12 ">\
           <label class="col-md-12 col-12">الوحده</label>\
           <input type="text" class="col-md-12 col-12 form-control" name="" id="" required=""\
             style="border-color: #9c9c9c;">\
         </div>\
         <div class="col-sm-2 col-12 ">\
           <label class="col-md-12 col-12">السعر</label>\
           <input type="number" class="col-md-12 col-12 form-control" name="" id=""\
             required="" style="border-color: #9c9c9c;">\
         </div>\
         <div class="col-sm-2 col-12 ">\
           <label class="col-md-12 col-12">سعر الشراء</label>\
           <input type="number" class="col-md-12 col-12 form-control" name="" id=""\
             required="" style="border-color: #9c9c9c;">\
         </div>\
         <div class="col-sm-2 col-12 ">\
           <label class="col-md-12 col-12">السعر القديم</label>\
           <input type="number" class="col-md-12 col-12 form-control" name="" id=""\
             required="" style="border-color: #9c9c9c;">\
         </div>\
         <div class="col-sm-2 col-12 ">\
    <label class="col-md-12 col-12"> كمية التزايد</label >\
      <input type="number" class="col-md-12 col-12 form-control" name="" id=""\
        required="" style="border-color: #9c9c9c;">\
         </div>\
       </div >\
       <div class="row">\
            <div class="col-sm-4 col-12 ">\
              <label class="col-md-12 col-12">اللون</label>\
              <input type="number" class="col-md-12 col-12 form-control" name=""\
                id="color0" required="" style="border-color: #9c9c9c;">\
              <label class="col-md-12 col-12">الكمية الموجودة</label>\
              <input type="number" class="col-md-12 col-12 form-control" name="" id="store_add0"\
                required="" style="border-color: #9c9c9c;">\
            </div>\
            <div class="col-sm-4 col-12 button_outer"\
              style="text-align: center;align-self: center;">\
              <label class="col-md-12 col-12">تحميل الصور</label>\
              <div class="btn_upload col-md-12 col-12">\
                <input id="_imagesInput' +
        i +
        "" +
        '0" onclick="newCol(' +
        i +
        "," +
        '0);" type="file" multiple="multiple">\
                تحميل\
              </div>\
            </div>\
            <div class="col-sm-4 col-12">\
              <br>\
              <!-- --------------------------------img slider----------------------------- -->\
              <div id="demo' +
        i +
        "" +
        '0" class="carousel slide" data-ride="carousel">\
                <ul id="carousel-indicators' +
        i +
        "" +
        '0" class="carousel-indicators">\
                  <li data-target="#demo' +
        i +
        "" +
        '0" data-slide-to="0" class="active"></li>\
                </ul>\
                <div id="carousel-inner' +
        i +
        "" +
        '0" class="carousel-inner">\
                  <div class="carousel-item active">\
                    <img src="/assets/img/1.jpg" alt="Los Angeles"\
                      style="height:178px;object-fit: contain;">\
                  </div>\
                </div>\
                <a class="carousel-control-prev" href="#demo' +
        i +
        "" +
        '0" data-slide="prev">\
                  <span class="carousel-control-prev-icon"></span>\
                </a>\
                <a class="carousel-control-next" href="#demo' +
        i +
        "" +
        '0" data-slide="next">\
                  <span class="carousel-control-next-icon"></span>\
                </a>\
              </div>\
            </div>\
         </div>\
     </div>\
     <br> <div class="row">\
        <button style="width: 120px;" type="button" onclick="colorOperation(' +
        i +
        ');"\
          class="btn btn-primary">اضافة لون</button>\
      </div>\
   </div>';
    $("#addtion_size0").append(html);

    if (i > 1) {
        var foo = document.getElementById("sizeRemove" + (i - 1));
        foo.style.display = "none";
    }
    i++;
}

var j = 1;
function addtion_color(txt) {
    var c = txt;
    j = getData(c);
    var html =
        '<hr>\
  <div class="row">\
  <div class="col-sm-4 col-12 ">\
    <label class="col-md-12 col-12">اللون</label>\
    <input type="number" class="col-md-12 col-12 form-control" name=""\
      id="color+' +
        c +
        '" required="" style="border-color: #9c9c9c;">\
    <label class="col-md-12 col-12">الكمية الموجودة</label>\
    <input type="number" class="col-md-12 col-12 form-control" name="" id="store_add' +
        c +
        '"\
      required="" style="border-color: #9c9c9c;">\
  </div>\
  <div class="col-sm-4 col-12 button_outer"\
    style="text-align: center;align-self: center;">\
    <label class="col-md-12 col-12">تحميل الصور</label>\
    <div class="btn_upload col-md-12 col-12">\
      <input id="_imagesInput' +
        c +
        "" +
        j +
        '" onclick="newCol(' +
        c +
        "," +
        j +
        ');" type="file" multiple="multiple">\
      تحميل\
    </div>\
  </div>\
  <div class="col-sm-4 col-12">\
    <br>\
    <!-- --------------------------------img slider----------------------------- -->\
    <div id="demo' +
        c +
        "" +
        j +
        '" class="carousel slide" data-ride="carousel">\
      <ul id="carousel-indicators' +
        c +
        "" +
        j +
        '" class="carousel-indicators">\
        <li data-target="#demo' +
        c +
        "" +
        j +
        '" data-slide-to="0" class="active"></li>\
      </ul>\
      <div id="carousel-inner' +
        c +
        "" +
        j +
        '" class="carousel-inner">\
        <div class="carousel-item active">\
          <img src="/assets/img/1.jpg" alt="Los Angeles"\
            style="height:178px;object-fit: contain;">\
        </div>\
      </div>\
      <a class="carousel-control-prev" href="#demo' +
        c +
        "" +
        j +
        '" data-slide="prev">\
        <span class="carousel-control-prev-icon"></span>\
      </a>\
      <a class="carousel-control-next" href="#demo' +
        c +
        "" +
        j +
        '" data-slide="next">\
        <span class="carousel-control-next-icon"></span>\
      </a>\
    </div>\
  </div>\
</div>';
    $("#addtion_colorap" + txt).append(html);
}
let numb = new Map();
function getData(num) {
    var value;
    console.log("valnum : " + num);
    console.log("valincreased : " + numb.get(num));
    if (numb.has(num)) {
        value = numb.get(num);
        console.log("valincreased : " + value);
        value++;
        numb.set(num, value);
        console.log("valincreased : " + value);
    } else {
        numb.set(num, 1);
        value = 1;
        console.log("valdidnnnt : " + value);
    }
    console.log("valincreased : " + numb.get(num));
    console.log("val : " + value);
    return value;
}

function removeSize(sizeid) {
    i--;
    if (i > 1) {
        var foo = document.getElementById("sizeRemove" + (i - 1));
        foo.style.display = "inline-block";
    }
    var element = document.getElementById("addtion_size0");
    element.removeChild(sizeid);
}
function newCol(x, y) {
    // $('#_imagesInput'+x+''+y).click();
    $("#_imagesInput" + x + "" + y).change(function(e) {
        alert("Handler for .change() called.");
        if (e.handled !== true) {
            e.handled = true;
            var $fileUpload = $("input[type='file']");
            if (parseInt($fileUpload.get(0).files.length) > 3) {
                alert("You can only upload a maximum of 3 files");
            } else {
                handleFileSelect();
            }
            function handleFileSelect() {
                //Check File API support
                if (window.File && window.FileList && window.FileReader) {
                    var files = event.target.files; //FileList object
                    var output = document.getElementById(
                        "carousel-inner" + x + "" + y + ""
                    );
                    var dots = document.getElementById(
                        "carousel-indicators" + x + "" + y + ""
                    );
                    var arrFilesCount = [];
                    var start = $(output).find("img").length;
                    var end = start + files.length;
                    var nonImgCount = 0;
                    for (var i = start; i < end; i++) {
                        arrFilesCount.push(i);
                    }
                    if (start !== 0) {
                        $(output)
                            .find("img > nav > a.prev")
                            .first()
                            .attr("href", "#slide-" + (end - 1));
                        $(output)
                            .find("img > nav > a.next")
                            .last()
                            .attr("href", "#slide-" + start);
                    }
                    var current_i;
                    var prev_i;
                    var next_i;
                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];

                        //Only pics
                        if (!file.type.match("image")) {
                            nonImgCount++;
                            continue;
                        }

                        var picReader = new FileReader();
                        picReader.addEventListener("load", function(event) {
                            var picFile = event.target;

                            current_i = arrFilesCount.shift();
                            if (current_i === 0) {
                                prev_i = files.length - 1;
                            } else {
                                prev_i = current_i - 1;
                            }
                            if (arrFilesCount.length - nonImgCount === 0) {
                                next_i = 0;
                            } else {
                                next_i = current_i + 1;
                            }

                            output.innerHTML =
                                output.innerHTML +
                                '<div id="img-' +
                                current_i +
                                '" class="carousel-item">' +
                                "<img src='" +
                                picFile.result +
                                "'" +
                                "title='' style=\"height:178px;object-fit: contain;\"/>"; // TODO: Enter Title

                            $(dots).append(
                                '<li data-target="#demo' +
                                    x +
                                    "" +
                                    y +
                                    '" data-slide-to=' +
                                    current_i +
                                    "></li>"
                            );
                        });
                        //Read the image
                        picReader.readAsDataURL(file);
                    }
                } else {
                    console.log("Your browser does not support File API");
                }
            }
            return;
        }
    });
}

// -----------------------------------------------------------------------------MY JS----------------------------------------------------------
