import './nivo-slider.scss';

(function($){
    $(document).ready(adjustSlider);
    $(window).resize(adjustSlider);

    function adjustSlider() {
        $('.nivoSlider').each((i, slider) => {
            let $slider = $(slider);
            let widthParent = $slider.parent().width();
            let widthSlider = $slider.width();
            $slider.css({
                'width' : widthParent,
                'height' : $slider.height() * widthParent/widthSlider
            });
        });
    }
})(jQuery);