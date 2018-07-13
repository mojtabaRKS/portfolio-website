$('#myframe').on('load', function () {
    $(this).contents().on('click','.select',function () {
        var path = $(this).attr('data-path')
        $('#path').val(path);
        $('#image').attr('src', path)
        $('#myModal').modal('hide')
    });
});