@extends('layouts.e-commerce')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h3>Datatables using NOTHING</h3>
            <table id="tblProducts" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>SIZE</th>
                        <th>COLOR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $p)
                    <tr>
                    <th> {{$p->id}} </th>
                    <th> {{$p->name}} </th>
                    <th> {{$p->sale_price}} </th>
                    <th> {{$p->quantity}} </th>
                    <th> {{$p->size}} </th>
                    <th> {{$p->color}} </th>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>

        </div>
        <div class="col-md-6">
            <h3>Datatables using AJAX</h3>
            <table id="tblProducts2" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>SIZE</th>
                        <th>COLOR</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                </tfoot>
            </table>

        </div>
    </div>
</div>

@endsection
