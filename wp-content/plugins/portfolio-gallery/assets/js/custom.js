"use strict";
function portfolioGalleryIsotope(elem,option){
    if(typeof elem.isotope == 'function'){
        elem.isotope(option);
    }
    else{
        elem.hugeitmicro(option);
    }
}
jQuery(document).ready(function () {
    jQuery('.portfolio-gallery-content').each(function(){
        var portfolioId = jQuery(this).attr('data-portfolio-id');

        jQuery("#huge_it_portfolio_content_"+portfolioId+" a[href$='.jpg'], #huge_it_portfolio_content_"+portfolioId+" a[href$='.png'], #huge_it_portfolio_content_"+portfolioId+" a[href$='.gif']").addClass('group1');
        var group_count = 0;
        jQuery(".portelement_"+portfolioId).each(function () {
            group_count++;
        });
        for (var i = 1; i <= group_count; i++) {
            jQuery(".portfolio-group" + i + "-" + portfolioId).removeClass('cboxElement').pcolorbox({rel: 'portfolio-group' + i + "-" + portfolioId});
        }
        jQuery(".portfolio-lightbox-group" + portfolioId).removeClass('cboxElement').pcolorbox({rel: "portfolio-lightbox-group" + portfolioId});
        jQuery(".portfolio-lightbox a[href$='.png'],.portfolio-lightbox a[href$='.jpg'],.portfolio-lightbox a[href$='.gif'],.portfolio-lightbox a[href$='.jpeg']").addClass("portfolio-lightbox-group");
        var group_count_slider = 0;
        jQuery(".slider-content").each(function () {
            group_count_slider++;
        });
        jQuery(".portfolio-group-slider" + i).removeClass('cboxElement').pcolorbox({rel: 'portfolio-group-slider' + i});
        for (var i = 1; i <= group_count_slider; i++) {
            jQuery(".portfolio-group-slider_" + portfolioId + "_" + i).removeClass('cboxElement').pcolorbox({rel: 'portfolio-group-slider_' + portfolioId + "_" + i});
            jQuery("#p-main-slider_"+portfolioId+" .clone  a").removeClass();

        }
        jQuery(".pyoutube").removeClass('cboxElement').pcolorbox({iframe: true, innerWidth: 640, innerHeight: 390});
        jQuery(".pvimeo").removeClass('cboxElement').pcolorbox({iframe: true, innerWidth: 640, innerHeight: 390});
        jQuery(".callbacks").removeClass('cboxElement').pcolorbox({
            onOpen: function () {
                alert('onOpen: pcolorbox is about to open');
            },
            onLoad: function () {
                alert('onLoad: pcolorbox has started to load the targeted content');
            },
            onComplete: function () {
                alert('onComplete: pcolorbox has displayed the loaded content');
            },
            onCleanup: function () {
                alert('onCleanup: pcolorbox has begun the close process');
            },
            onClosed: function () {
                alert('onClosed: pcolorbox has completely closed');
            }
        });

        jQuery('.non-retina').removeClass('cboxElement').pcolorbox({rel: 'group5', transition: 'none'})
        jQuery('.retina').removeClass('cboxElement').pcolorbox({rel: 'group5', transition: 'none', retinaImage: true, retinaUrl: true});

        jQuery("#huge_it_portfolio_content_"+portfolioId+" #huge_it_portfolio_filters_"+portfolioId+" ul li a").click(function () {
            jQuery("#huge_it_portfolio_content_"+portfolioId+" #huge_it_portfolio_filters_portfolioId ul li").removeClass("active");
            jQuery(this).parent().addClass("active");

        });
    });

})