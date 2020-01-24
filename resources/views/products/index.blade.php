@extends('layouts.header')
@extends('layouts.sidebar')
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
<div class="kt-portlet__body">
    <div class="tab-content  kt-margin-t-20">
        <!--Begin:: Tab Content-->
        <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-dismissable alert-success">

                    <strong>
                        {!! session()->get('success') !!}
                    </strong>
                    <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td> {{ ++$i }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>
                            <form action="{{ route('product.destroy',$product->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('product.show', $product->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

            </table>
            {!! $products->links() !!}
        </div>
        <!--end:: Tab Content-->
    </div>
</div>
</div>
@extends('layouts.footer')