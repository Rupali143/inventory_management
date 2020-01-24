@extends('layouts.header');
@extends('layouts.sidebar');

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>

    @endif

    @if(session('success'))
        <div class="alert alert-success">
            <li> {{session('success')}}</li>
        </div>
    @endif
<div class="kt-portlet__body">
    <div class="tab-content  kt-margin-t-20">

        <!--Begin:: Tab Content-->
        <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
            <form class="kt-form kt-form--label-right" action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="kt-form__body">
                    <div class="kt-section kt-section--first">
                        <div class="kt-section__body">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h3 class="kt-section__title kt-section__title-sm">Add Products:</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input class="form-control" type="text" name="name" placeholder="Enter Product name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Category</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input class="form-control" type="text" name="category" placeholder="Enter Product Category">
                                </div>
                            </div>
                            <div class="form-group col-8">
                                <input type="submit" class="btn btn-brand btn-bold pull-right" value="Save Changes" style="margin-left: 20px;">
                                <a href="{{route('product.index')}}" type="button" class="btn btn-brand btn-bold pull-right">Back</a>

                            </div>
                      </div>
                    </div>

                </div>

            </form>
        </div>
   </div>
</div>
</div>
        <!--End:: Tab Content-->

@extends('layouts.footer');

