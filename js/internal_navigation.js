/*  
    Script for internal navigation for pages with several sections  
    based on the code examples and descriptions of
    http://callmenick.com/post/single-page-site-with-smooth-scrolling-highlighted-link-and-fixed-navigation 
*/

$(document).ready(function () {

    /*  
        when the scroll event is triggered, the distance, how much the page has been moved up, is measured (scrollTop)
        if the internal navigation element has reached the top of the window, it is fixed at that position
    */
    $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
        var div_top = $('#nav-anchor').offset().top;
        if (window_top > div_top) {
            $('nav.internal_navigation').addClass('stick');
        } else {
            $('nav.internal_navigation').removeClass('stick');
        }
    });

    /*
        if a link is clicked, the ScrollTo-plugin is used, to move the page in a smooth way
     */
    $("nav.internal_navigation a").click(function (evn) {
        evn.preventDefault();
        $('html,body').scrollTo(this.hash, this.hash);
    });

    /*
        Again, when the scroll-event is triggered, the current position of the document within the window is detected.
        Based on the IDs of the sections (also contained as links in the navigation), the individual sections are identified.
        If a section is reaching the top of the page 
        (=> the (fixed) distance of the section to the top of the document < the distance already scrolled up (scrollTop))
        and if scrolling hasn´t reached the end of the section yet (height),
        then the "scroll-active"-class is added to the corresponding navigation item
     */
    var aChildren = $("nav.internal_navigation li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i = 0; i < aChildren.length; i++) {
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values

    $(window).scroll(function () {
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i = 0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("scroll-active");
            } else {
                $("a[href='" + theID + "']").removeClass("scroll-active");
            }
        }

        if (windowPos + windowHeight == docHeight) {
            if (!$("nav li:last-child a").hasClass("scroll-active")) {
                var navActiveCurrent = $(".scroll-active").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("scroll-active");
                $("nav li:last-child a").addClass("scroll-active");
            }
        }
    });

});
