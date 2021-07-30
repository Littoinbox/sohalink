(function ($) {
    $(document).ready(function () {
        $('.calendarMain').bxSlider({
            pager: false,
            controls: true,
            auto: true,
            pause: 10000,
            minSlides: 1,
            maxSlides: 3,
            slideMargin: 45,
            slideWidth: 350,


        });
        $('audio').audioPlayer();
        $('.bx-viewport').css('height', 'auto');
        $('.bx-viewport').css('min-height', '600px');
        var step = 0;
        var trueAnswer = 0;
        var rightAnswer = 0;
        $(document).on('click', '.quizeNext', function () {
            if (step != 0) {
                var answer = $('.answerId:checked').val();
                if (answer == undefined) {
                    alert('Вы не выбрали ответ!');
                    return false;
                }
                if (trueAnswer == answer) {
                    rightAnswer++;
                }
            }
            $.ajax({
                method: "POST",
                url: "/quize/" + $('.idQuize').val(),
                data: {step: step, '_token': $('[name=_token]').val()},
                error: function (e) {
                    console.log(e);
                },
                success: function ($resp) {
                    if ($resp.length == 0) {
                        var persent = 100/step*rightAnswer;
                        var text ='';
                        if (persent<30)
                        {
                            text = $('.thirty_persent_right').html();
                        }
                        else if(persent>=30 && persent<50)
                        {
                            text = $('.fifty_persent_right').html();
                        }
                        else if(persent>=50 && persent<70)
                        {
                            text = $('.seventy_persent_right').html();
                        }
                        else if(persent>=70)
                        {
                            text = $('.hundred_right').html();
                        }
                        text = "<div class='trueAnswer'>Вы ответили правильно на "+rightAnswer+" из "+step+"</div>"+text;
                        $('.quize').html(text);
                        $('.quizeBtn').css('display', 'none');

                    } else {
                        trueAnswer = $resp[0].answerTrue;
                        var html = '<div class="question">' + $resp[0].question + '</div>';
                        html += "<div class='answers'>";
                        for (var i = 0; i < $resp[0].answer.length; i++) {
                            html += "<div class='answer'><input type='radio' value='" + parseInt(i + 1) + "' " +
                                "class='answerId'>" + $resp[0].answer[i] + "</div>";
                        }
                        html += "</div>";
                        $('.quize').html(html);
                        $('.quizeNext').html('Следующий вопрос');
                        step++;

                    }
                }
            });
            return false;
        });

    });

})(jQuery);
