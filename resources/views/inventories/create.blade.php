@extends('main')
@section('title', '| Add Item')
@section('content')


    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Add New Item</div>
                            <div class="card-body card-block">
                                <div class="login-form">
                                    <form action="{{ url('inventories') }}" method="POST" class="">
                                        @csrf

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-industry"></i>
                                                </div>
                                                <input id="type" name="type" placeholder="Item Type" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <input id="name" name="name" placeholder="Name" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </div>
                                                <textarea id="description" name="description" placeholder="Description" class="form-control" type="text"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <input id="located_at" name="located_at" placeholder="Location" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-actions form-group">
                                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Register Item</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection