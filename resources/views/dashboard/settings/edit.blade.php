@extends('dashboard.layouts.app')
@section('title', 'Imad Daimi - dashboard edit setting')
@section('content')
<style>
     .flex-container {
        display: flex;
        position: relative;
        margin-bottom:5px;
    }

    .form-control {
        position: relative;
        flex: 1; /* Allow textarea to grow within the flex container */
    }

    .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 5px;
        background-color: red;
        color: white;
        border: none;
        cursor: pointer;
    }
</style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Edit Setting</h2>
                <div class="card shadow mb-4">
                    <form id="quickForm" method="post" action="{{ route('update.setting', ['id' => $setting->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Label</label>
                                        <input type="text" name="label" class="form-control"  placeholder="Enter Label"value="{{ old(' label',$setting->label) }}">
                                        @if ($errors->has('label'))
                                            <p class="text-error more-info-err" style="color: red;">
                                                {{ $errors->first('label') }}</p>
                                        @endif
                                      </div>
                                      <div class="form-group mb-3">
                                          <label for="exampleInputEmail1">Category</label>
                                          <input disabled type="text" name="category" class="form-control"  placeholder="Enter Category"value="{{ old(' category',$setting->category) }}">
                                         
                                      </div>
                                      @if($setting->type=='textarea')
                                        <div class="form-group mb-3">
                                            <label for="exampleInputEmail1">Value</label>
                                            
                                            <textarea name="value" class="form-control" style="height: 200px;" placeholder="Enter Your Text">{{ old(' value',$setting->value) }}</textarea>
                                        </div>
                                      @elseif($setting->type=='file')
                                            <div class="form-group mb-3">
                                                <label for="exampleInputEmail1">Value</label>
                                                @if($setting->value !=null)
                                                <p for="exampleInputEmail1">Existed File: <a href="{{url($setting->value)}}" target="_blank">here</a></p>
                                                @endif
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                @if ($errors->has('value'))
                                                    <p class="text-error more-info-err" style="color: red;">
                                                        {{ $errors->first('value') }}</p>
                                                @endif
                                            </div>
                                        @elseif($setting->type=='points')
                                        <div class="form-group mb-3" id="div-points">

                                            <label for="exampleInputEmail1">Value</label>
                                            @foreach(json_decode($setting->value) as $key=>$value)
                                            <div class="flex-container">
                                                <textarea name="value[]" class="form-control" style="height: 100px;" placeholder="Enter Your Text">{{$value}}</textarea>
                                                <button onclick="removeDiv(this)" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @endforeach
                                            
                                            
                                            
                                            <a  style="float: right;color:#1b68ff;cursor:pointer;"onclick="addPoint(this)">add point</a>
                                        </div>
                                        @endif
                                   
                                   
                                    
                                </div>
                                
                            </div>
                            <button type="submit" class="btn mb-2 btn-outline-primary" style="width: 10%">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    function removeDiv(btn) {
        // Get the parent element (the div containing the textarea and the button)
        var div = btn.parentNode;
        // Remove the parent div from the DOM
        div.remove();
    }
    function addPoint(link) {
    var newDiv = document.createElement('div');
    newDiv.className = 'flex-container';

    var textarea = document.createElement('textarea');
    textarea.className = 'form-control';
    textarea.style.height = '100px';
    textarea.setAttribute('name', 'value[]');
    textarea.setAttribute('placeholder', 'Enter Your Text');


    var closeButton = document.createElement('button');
    closeButton.className = 'close';
    closeButton.setAttribute('type', 'button');
    closeButton.setAttribute('data-dismiss', 'modal');
    closeButton.setAttribute('aria-label', 'Close');
    closeButton.onclick = function() { removeDiv(this); };

    var closeSpan = document.createElement('span');
    closeSpan.setAttribute('aria-hidden', 'true');
    closeSpan.textContent = '×';

    closeButton.appendChild(closeSpan);
    
    newDiv.appendChild(textarea);
    newDiv.appendChild(closeButton);

    link.parentNode.insertBefore(newDiv, link);
}
</script>
@endpush