(function ($) {
    $(document).on('click', '.addQuest', function (){
        var  html ="<div class=\"form-group ans\">\n" +
            "            <label for=\"answer\">Ответ</label>\n" +
            "            <textarea name=\"answer[]\" class=\"answer\"></textarea>\n" +
            "            <label >Правильный ответ</label>\n" +
            "            <input type=\"radio\" value=\"1\" class=\"answerTrue\" name=\"answerTrue\"><br />\n" +
            "            <button type=\"button\" class=\"btn btn-danger delQuest\">Удалить ответ</button>\n" +
            "        </div>";
        var lastAns = $('.ans').last();
        if (lastAns.length>0)
        {
            lastAns.after(html);
        }
        else {
            $('.form-group').last().after(html);
        }
        countAnswer();
    });
    $(document).on('click', '.delQuest', function (){
        $(this).parent().remove();
        countAnswer();

    });
    $(document).on('click', '.saveQuest', function (){
       var answer =false;
        $('.answerTrue').each( function(){
            if ($(this).is(":checked")){
                answer = true;
            }
        });
        if (!answer)
        {
            alert('Не выбран правильный ответ');
            return false;
        }

    });

       function countAnswer(){
        var i = 1;
        $('.answerTrue').each( function(){
            $(this).val(i);
            i++;
        });
    }
    $(window).on('load', function(){
        $('#datetimepicker1').datetimepicker({
            locale: 'ru',
            format: 'YYYY-MM-DD HH:mm:ss',
        });
        tinymce.init({
            selector: '#description'
        });

    });

})(jQuery);
