var $inner = $('.inner'),
    $spin = $('#spin'),
    $reset = $('#reset'),
    $data = $('.data'),
    $mask = $('.mask'),
    maskDefault = 'spin to one correct',
    timer = 9000;

var red = [32, 19, 21, 25, 34, 27, 36, 30, 23, 5, 16, 1, 14, 9, 18, 7, 12, 3];

$reset.hide();

$mask.text(maskDefault);

$spin.on('click', function() {

    // get a random number between 0 and 36 and apply it to the nth-child selector
    var randomNumber = Math.floor(Math.random() * 36),
        color = null;
    $inner.attr('data-spinto', randomNumber).find('li:nth-child(' + randomNumber + ') input').prop('checked', 'checked');
    // prevent repeated clicks on the spin button by hiding it
    $(this).hide();
    // disable the reset button until the ball has stopped spinning
    $reset.addClass('disabled').prop('disabled', 'disabled').show();

    $('.placeholder').remove();


    setTimeout(function() {
        $mask.text('Please wait');
    }, timer / 2);

    setTimeout(function() {
        $mask.text(maskDefault);
    }, timer + 500);



    // remove the disabled attribute when the ball has stopped
    setTimeout(function() {
        $reset.removeClass('disabled').prop('disabled', '');

        if ($.inArray(randomNumber, red) !== -1) { color = 'red' } else { color = 'black' };
        if (randomNumber == 0) { color = 'green' };

        if (color != 'black') {
            $('.result-number').text(randomNumber);
        } else {
            $('.result-number').text('×');
        }

        $('.result-color').text(color);
        $('.result').css({ 'background-color': '' + color + '' });
        $data.addClass('reveal');
        $inner.addClass('rest');

        //加筆部分
        if (color === 'black') {
            $thisResult = '<li class="previous-result color-' + color + '"><span class="previous-number">ハズレ</span><span class="previous-color">' + color + '</span></li>';
        } else {
            $thisResult = '<li class="previous-result color-' + color + '"><span class="previous-number">' + randomNumber + '</span><span class="previous-color">' + color + '</span></li>';
        }
        $('.previous-list').prepend($thisResult);


    }, timer);

});


$reset.on('click', function() {
    // remove the spinto data attr so the ball 'resets'
    $inner.attr('data-spinto', '').removeClass('rest');
    $(this).hide();
    $spin.show();
    $data.removeClass('reveal');
});

// so you can swipe it too
var myElement = document.getElementById('plate');
var mc = new Hammer(myElement);
mc.on("swipe", function(ev) {
    if (!$reset.hasClass('disabled')) {
        if ($spin.is(':visible')) {
            $spin.click();
        } else {
            $reset.click();
        }
    }
});