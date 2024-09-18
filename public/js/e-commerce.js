$(document).ready(init);

function init()
{
   new DataTable('#tblProducts');
   new DataTable('#tblProducts2', {
    ajax: '/api/products',
    columns: [
        { data: 'id' },
        { data: 'name' },
        { data: 'sale_price' },
        { data: 'quantity' },
        { data: 'size' },
        { data: 'color' }
    ]
});
}
