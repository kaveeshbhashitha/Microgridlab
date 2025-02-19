<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('image/admin.png') }}" type="image/x-icon">
    <title>Update Consultant</title>
</head>
<body>
    <x-admin-layout>
        <!--Add publication-->
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0;">
            <div id="international" class="form-box shadow p-3" style="width: 80%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Publication - Update Consultant</h5>
                <div style="width: 20%; height: 1px; border: 1px solid rgb(87, 87, 87); margin-top:10px;"></div>

                <form class="my-2" action="{{ route('publication.update', $publication->id) }}" method="POST" enctype="multipart/form-data">
                
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
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Consultant Title</label>
                            <input type="text" name="pubtitle" class="form-control" id="inputCity" placeholder="Enter publication title.." value="{{ $publication->pubtitle }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputAddress2">Rate</label>
                            <select id="inputState" class="form-control" name="rate">
                                <option selected value="{{ $publication->rate }}">{{ $publication->rate }}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Consultant URL</label>
                            <input type="text" name="puburl" class="form-control" id="inputCity" placeholder="Enter URL..." value="{{ $publication->puburl }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter small description here...">{{ $publication->description }}</textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <img src="{{ $publication->pubimage }}" alt="Publication Image">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Upload image</label>
                            <input type="file" name="pubimage" class="form-control" style="border: none;" id="inputPassword4" placeholder="Choose file">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Update Consultant</button>
                </form>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>