$("#encode").click(function(){
    event.preventDefault();
    $.ajax({
        url: "ajax",
        data: {
            text: "text",
            algorithm: 1
        },
        type: "POST",
        success: function(data)
        {
            var response = JSON.parse(data);
            if(response.status = 200)
                $("#encoded_text").text(response.msg);
            else
                $("#error").text(response.msg);
        }
    })
})