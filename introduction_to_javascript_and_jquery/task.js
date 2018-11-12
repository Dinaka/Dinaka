$(document).ready(function()
{


    $('button').click(function()
    {
        var text= $('#textfield').val();
        console.log(text);

        $('#list').append("<li>"+text+"</li>");
    }
    );
});