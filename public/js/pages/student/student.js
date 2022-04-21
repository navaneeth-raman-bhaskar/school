$(function () {
    $('tbody.students').on('click', '.delete', function (e) {
        e.preventDefault();
        Ajax.delete($(this))
    })
})
