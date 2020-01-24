@extends('layouts.header')
@extends('layouts.sidebar')
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
    <div class="kt-portlet__body">
        <div class="tab-content  kt-margin-t-20">
            <!--Begin:: Tab Content-->
            <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                {{--<div class="pull-right">--}}
                    {{--<a class="btn btn-success" href="{{ route('product.index') }}">Back</a>--}}
                {{--</div>--}}
            @if($errors->any())
                <div class="alert alert-danger">
                    {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Edit Products
                    </h3>
                </div>
            </div>
            

            <!--begin::Form-->
            <form class="kt-form" action="{{ route('product.update',$product->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Product Name:</label>
                            <input type="text" class="form-control" placeholder="Enter name" value="{{$product->name}}" name="name" required>
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>

                        <div class="form-group">
                            <label>Category:</label>
                            <input type="text" class="form-control" placeholder="Enter category" value="{{$product->category}}" name="category" required>
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>

                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <button type="reset" class="btn btn-secondary">Back</button>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
        </div>
        </div>
    </div>
</div>
@extends('layouts.footer')