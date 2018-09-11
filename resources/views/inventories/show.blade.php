@extends('main')
@section('title', '| View Inventory')
@section('content')

    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <!-- Inserted Item -->
                        <hr>
                        <h3 class="title-5 m-b-35">Inserted Item</h3><hr>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th>
                                    <th>Item Type</th>
                                    <th>Name</th>
                                    <th>description</th>
                                    <th>Located At</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>

                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                    <td>{{ $inventory->type }}</td>
                                    <td>
                                        <span class="block-email">{{ $inventory->name }}</span>
                                    </td>
                                    <td class="desc">{{ $inventory->description }}</td>
                                    <td>{{ $inventory->located_at }}</td>
                                    <td>
                                        <span class="status--process">{{ $inventory->created_at }}</span>
                                    </td>
                                    <td>{{ $inventory->updated_at }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
            </div><!-- .animated -->

    </section>

@endsection