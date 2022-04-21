$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('#csrf').data('token')
        },
        statusCode: {
            401: function () {
                location.reload()
            },
            419: function () {
                location.reload()
            }
        }
    })
})

class Ajax {
    static delete(button) {
        let confirmed = confirm('Do you want to delete ?')
        if (confirmed) {
            $.ajax({
                url: button.attr('href'),
                type: 'POST',
                dataType: 'json',
                data: {
                    '_method': 'DELETE'
                },
                success: function (res) {
                    button.closest('tr').remove();
                },
                error: function (err) {
                    console.error(err)
                    alert('cannot delete')
                }
            })
        }
    }
}
