@extends('layouts.master')

@section('content')
<div class="col-lg-6">
    <div class="middull-content">
        <form id="ask" class="your-answer-form">
            <div class="form-group">
                <h3>Create a questions</h3>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Category</label>

                <select class="form-select form-control" name="category" aria-label="Default select example">
                    <option selected disabled>Selete cagegory</option>
                    <option value="1">One</option>
                </select>
            </div>

            <div class="form-group accordions">
                <label>Tags (Add up to 5 tags to describe what your question is about)</label>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Chose tags
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body d-flex row mx-0">
                            <div class="custom-control custom-checkbox col-3 pt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck5" name="tag" value="ck1">
                                <label class="custom-control-label" for="customCheck5">checkbox</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Description</label>
                <div id="txtEditor"></div>
            </div>

            <div class="form-group">
                <div class="file-upload-account-info">
                    <input type="file" name="file" id="file-2" class="inputfile">
                    <label class="upload">
                        <i class="ri-link"></i>
                        Upload Photo
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="default-btn">Post your answer</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $(".upload").click(function (e) { 
                e.preventDefault();
                $("#file-2").trigger('click');
            });

            $("#ask").submit(function (e) { 
                e.preventDefault();
                let data = new FormData(this)
                let text = $(".Editor-editor").html();
                console.log(data);
                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1],text); 
                }
            });
        });
    </script>
@endpush