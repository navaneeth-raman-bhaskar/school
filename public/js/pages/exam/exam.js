$(function () {
    $('tbody.exams').on('click', '.delete', function (e) {
        e.preventDefault();
        Ajax.delete($(this))
    })
})
