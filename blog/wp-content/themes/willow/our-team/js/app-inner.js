$(document).ready(function() {    
//Common
function randomFromTo(from, to){
    return Math.floor(Math.random() * (to - from + 1) + from);
}
function moveRandom(obj) {
    /* get container position and size
     * -- access method : cPos.top and cPos.left */
    var cPos = $('.team-grid').offset();
    var cHeight = $('.team-grid').height();
    var cWidth = $('.team-grid').width();

    // get box padding (assume all padding have same value)
    var pad = parseInt($('.team-grid').css('padding-top').replace('px', ''));

    // get movable box size
    var bHeight = obj.height();
    var bWidth = obj.width();

    // set maximum position
    maxY = cPos.top + cHeight - bHeight - pad;
        maxX = cPos.left + cWidth - bWidth - pad;

    // set minimum position
    minY = -cPos.top;
    minX = -cPos.left;

    // set new position
    newY = randomFromTo(minY, maxY);
    newX = randomFromTo(minX, maxX);

    obj.animate({
        top: newY,
        left: newX
        }, 0, function() {
        //moveRandom(obj);
    });
}
function showTeam(){
    if($('.about-us-body').length != 0) {
        $('section.about-us').addClass('done-animation');
        var teamSize = $('.team-grid li').length;
        $.each($('.team-grid li'), function(i, el){
            setTimeout(function(){
                $(el).find("figure").attr("style", 'background-position: 0px ' + ((teamSize - i) * 100) + 'px;');
                $(el).addClass('visible-member');
            }, 300 + ( i * 100 ));
        });
    }
}
//Common


    $('.team-grid li').each(function() {
        moveRandom($(this));
    });

    showTeam();
    lateralEye();  

});
