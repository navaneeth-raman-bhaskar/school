$(function () {
    $('tbody.subjects').on('click', '.delete', function (e) {
        e.preventDefault();
        Ajax.delete($(this))
    })
})
