$(document).ready(function() {
    console.log('file connected');
    checkApi()
});

function checkApi() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "api/controller/controller.php",
        data: {
            model: 'User',
            action: 'checkApi',
            params: {
                message: 'hello server'
            }
        }, success:function(data) {
            console.log(data);
        }
    })
}