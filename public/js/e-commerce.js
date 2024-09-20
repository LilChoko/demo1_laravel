$(document).ready(init);

function init() {
    new DataTable('#tblProducts');
    new DataTable('#tblProducts2', {
        ajax: '/api/products',
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'sale_price' },
            { data: 'quantity' },
            { data: 'size' },
            { data: 'color' },
            { data: 'category.name' }
        ]
    });
    //Select listado de categorias
    $('#cmbCategoryList').select2({
        ajax: {
            url: '/api/categories',
            dataType: 'json'
        }
    });
    $('#cmbCategoryList').on('select2:select', function (e) {
        var data = e.params.data;
        console.log("You selected: " + data.id);
        $("#tblProducts2").DataTable().ajax.url("/api/products/" + data.id).load();
    });
}
