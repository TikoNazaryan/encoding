$("#encode").click(function(){
    event.preventDefault();
    $.ajax({
        url: "ajax",
        data: {
            text: $("#text-for-encode").val(),
            algorithm: $('[name="algorithm"]:checked').attr("data-type")
        },
        type: "POST",
        success: function(data)
        {
            console.log(data);
            return;
            var response = JSON.parse(data);
            if(response.status = 200)
                $("#encoded_text").text(response.msg);
            else
                $("#error").text(response.msg);
        }
    })
})