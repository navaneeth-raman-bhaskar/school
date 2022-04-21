$(function () {
    $('tbody.terms').on('click', '.delete', function (e) {
        e.preventDefault();
        Ajax.delete($(this))
    })
})
