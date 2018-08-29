@extends('main')
@section('title', '| View An Item')
@section('content')


    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                       <div class="container">
                         <div class="login-wrap">
                            <div class="login-content">
                                <div class="card">
                                    <div class="card-header">View An Item</div>
                                    <div class="card-body card-block">
                                        <div class="login-form">
                                            <form action="{{ route('inventories.create') }}" method="GET" class="">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-industry"></i>
                                                        </div>
                                                        <input id="username" name="itemType" placeholder="Item Type" class="form-control" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <input id="username" name="name" placeholder="Name" class="form-control" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-edit"></i>
                                                        </div>

                                                        <textarea id="username" name="description" placeholder="Description" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-home"></i>
                                                        </div>
                                                        <input id="location" name="password" placeholder="Location" class="form-control" type="password">
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
                </div>

            </div>
        </div>

    </section>


@endsection