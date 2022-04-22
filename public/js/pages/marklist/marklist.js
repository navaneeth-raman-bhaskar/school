$(function () {
    $('tbody.lists').on('click', '.delete', function (e) {
        e.preventDefault();
        Ajax.delete($(this))
    })
})
