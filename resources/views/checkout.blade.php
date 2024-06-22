@extends('layouts.template')

@section('title', 'Checkout')

@section('content')
<div class="container mt-5 pt-5">

    <!-- Checkout Table -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bread Bun</td>
                    <td>Rp.6.000,-</td>
                    <td>
                        <div class="input-group">
                            <input type="number" name="quantity" value="1" min="1" class="form-control">
                            <button type="button" class="btn btn-primary">Update</button>
                        </div>
                    </td>
                    <td>Rp.6.000,-</td>
                    <td>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" name="cart_item_id" value="1"> <!-- Contoh, ganti dengan ID sesuai produk -->
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
                <!-- Repeat similar rows for other products -->
            </tbody>
        </table>
    </div>

    <!-- Total -->
    <div class="d-flex justify-content-end mt-3">
        <h4 class="me-3">Total: Rp.,-</h4>
    </div>

    <!-- Order Button -->
    <div class="text-center mb-5">
        <button type="button" class="btn btn-lg btn-primary">Order</button>
    </div>
</div>
@endsection

@section('styles')
<style>
    .table th,
    .table td {
        vertical-align: middle;
        text-align: left;
    }

    .input-group .form-control {
        max-width: 70px;
    }

    .input-group .btn {
        margin-left: 5px;
    }

    .divider-custom {
        display: flex;
        align-items: center;
    }

    .divider-custom-line {
        flex-grow: 1;
        height: 1px;
        background-color: #e2e8f0;
        margin: 0 10px;
    }

    .divider-custom-icon {
        font-size: 2rem;
        color: #c79850;
    }

    .table-responsive {
        margin-top: 50px; /* Adjust as needed */
        margin-bottom: 50px; /* Adjust as needed */
    }

    .mt-3 {
        margin-top: 100px; /* Adjust top margin for the total */
    }
</style>
@endsection
