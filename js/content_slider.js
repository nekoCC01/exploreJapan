/*  
    CONTENT Slider for Homepage  
    by Daniel Kasai
*/

$(document).ready(function () {

    //which img is currently shown?
    var currentImgNumber = 0;

    //width values for full content and current slider --> needed to calculate the increment/decrement for slider movements
    $numberSliderLi = $("#slider ul li").length;
    $sliderWidth = $("#slider").width();
    $widthFullSliderContent = $numberSliderLi * $sliderWidth;
    $("#slider ul").width($widthFullSliderContent);

    var container = "#slider";
    var img = "#slider ul li img";
    //set img-width to width of container (slider)
    adjustImgToContainer(img, container);

    $(window).resize(function () {
        //reset all values when window is resized
        $numberSliderLi = $("#slider ul li").length;
        $sliderWidth = $("#slider").width();
        $widthFullSliderContent = $numberSliderLi * $sliderWidth;
        $("#slider ul").width($widthFullSliderContent);

        $newMargin = currentImgNumber * $sliderWidth * -1;
        $("#slider ul").css("margin-left", $newMargin);

        adjustImgToContainer(img, container);
    });

    $("#right").click(function () {
        //get current margin
        $currentMargin = $("#slider ul")[0].offsetLeft;

        //if we haven´t reached the end, slide to the left (go the the next right image)
        if (Math.abs($currentMargin) < $widthFullSliderContent - $sliderWidth) {
            $newMargin = $currentMargin + $sliderWidth * -1;
            $("#slider ul").animate({
                "margin-left": $newMargin
            }, 1000);
            currentImgNumber++;
        }
    });
    $("#left").click(function () {
        $currentMargin = $("#slider ul")[0].offsetLeft;

        //allow sliding to the right (go to left image), when margin < 0 (slider has already been moved to left)
        if ($currentMargin < 0) {
            $newMargin = $currentMargin + $sliderWidth;
            $("#slider ul").animate({
                "margin-left": $newMargin
            }, 1000);
            currentImgNumber--;
        }

    });
});
