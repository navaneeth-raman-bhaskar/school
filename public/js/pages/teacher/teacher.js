$(function () {
    $('tbody.teachers').on('click', '.delete', function (e) {
        e.preventDefault();
        Ajax.delete($(this))
    })
})
