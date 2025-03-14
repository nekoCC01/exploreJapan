

function adjustImgToContainer(imgSelector,containerSelector){

    var imgContainerWidth = $(containerSelector).width();
    var imgNaturalWidth = $(imgSelector)[0]['naturalWidth'];
    var imgNaturalHeight = $(imgSelector)[0]['naturalHeight'];

    var imgNewHeight = (imgContainerWidth / imgNaturalWidth ) * imgNaturalHeight;
    $(imgSelector).width(imgContainerWidth);
    $(imgSelector).height(imgNewHeight);
}