(function ($) {
    $(document).ready(function () {
        $('.calendarMain').bxSlider({
            pager: false,
            controls: true,
            auto: true,
            pause: 10000,
            minSlides: 1,
            maxSlides: 1,




        });
        $('audio').audioPlayer();
        $('.bx-viewport').css('height', 'auto');
        //$('.bx-viewport').css('min-height', '600px');
        var step = 0;
        var trueAnswer = 0;
        var rightAnswer = 0;
        $(document).on('click', '.quizeNext', function () {
            console.log($('.quizeAnswer').css('display'));
            if (step != 0 && $('.quizeAnswer').css('display')!='block') {
                var answer = $('.answerId:checked').val();
                var answerText = '';
                if (answer == undefined) {
                    alert('Вы не выбрали ответ!');
                    return false;
                }
                if (trueAnswer == answer) {
                    rightAnswer++;
                    answerText ="<div><img src='/images/icon_r.png'>Верно</div>";
                }
                else {
                    answerText ="<div><img src='/images/icon_n.png'>Неверно</div>";
                }
                var trueAnsverDiv = $('.answerThisDiv').html();
                $('.quizeAnswer').html(answerText+trueAnsverDiv);

                $('.question').css('display', 'none');
                $('.answers').css('display', 'none');
                $('.quizeAnswer').css('display', 'block');
                $('.quizeNext').html('Следующий вопрос');
            }
            else {
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
                             html += "<div class='answer'><div class='col-xs-1'><input type='radio' value='" + parseInt(i + 1) + "' " +
                                "class='answerId' name='answerId'></div><div class='col-xs-11'>" + $resp[0].answer[i] + "</div></div>";
                        }
                        if ($resp[0].lastTextAnswer==null)
                        {
                            $resp[0].lastTextAnswer='';
                        }
                        html += "</div><div class='answerThisDiv'>"+$resp[0].lastTextAnswer+"</div><div class='quizeAnswer' "
                        + "style='display:none'></div>";

                        $('.answers').css('display', 'block');
                        $('.quizeAnswer').css('display', 'none');
                        $('.quize').html(html);
                        $('.quizeNext').html('Ответить на вопрос');
                        step++;

                    }
                }
            });
            }
            return false;
        });

    });

})(jQuery);
