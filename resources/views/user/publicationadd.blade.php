<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('image/user.png') }}" type="image/x-icon">
    <title>Add-Publication</title>
</head>
<body>
    <x-app-layout>
        <!--Add publication-->
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0;">
            <div id="international" class="form-box shadow p-3" style="width: 80%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Publication - Add New Publication</h5>
                <div style="width: 20%; height: 1px; border: 1px solid rgb(87, 87, 87); margin-top:10px;"></div>

                <form class="my-2" method="post" action="{{ url('publication') }}" enctype="multipart/form-data">
                
                    <div class="my-2">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    </div>
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Publication Title</label>
                            <input type="text" name="pubtitle" class="form-control" id="inputCity" placeholder="Enter research title..">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Publisher Name</label>
                            <input type="text" name="pubname" class="form-control" id="inputEmail4" placeholder="Enter main researcher name...">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Published Journal</label>
                            <input type="text" name="pubjournal" class="form-control" id="inputEmail4" placeholder="Enter instructor name...">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Date</label>
                            <input type="date" name="pubdate" class="form-control" id="inputAddress" placeholder="Enter email address">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Issue</label>
                            <input type="text" name="issue" class="form-control" id="inputAddress" placeholder="Enter country name">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Volume</label>
                            <input type="text" name="volume" class="form-control" id="inputAddress" placeholder="Enter country name">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAddress">Pages</label>
                            <input type="text" name="pages" class="form-control" id="inputAddress" placeholder="Enter country name">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputAddress2">Rate</label>
                            <select id="inputState" class="form-control" name="rate">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Publication URL</label>
                            <input type="text" name="puburl" class="form-control" id="inputCity" placeholder="Enter URL...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description<div class="text-danger italic">(Limit description up to maximum 100 words)</div></label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter small description here..."></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Upload image</label>
                            <input type="file" name="pubimage" class="form-control" style="border: none;" id="inputPassword4" placeholder="Choose file">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Add New</button>
                </form>
            </div>
        </div>
    </x-app-layout>
</body>
</html>