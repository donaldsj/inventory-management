@extends('main')
@section('title', '| userReport')
@section('content')
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                        <h3> Report Form <h3>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Name of item</label>
                                    <input class="au-input au-input--full" type="text" name="itemName" >
                                </div>
                                <div class="form-group">
                                    <label>Location of item</label>
                                    <input class="au-input au-input--full" type="text" name="location"">
                                </div>
                                <div class="form-group">
                                    <label>Reported information</label>
                                    <div class="col-12 col-md-9">
                                     <textarea name="textarea-input" id="textarea-input" rows="9" class="form-control"></textarea>
                                                </div>
                                </div>
                                
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Report</button>
                                
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection