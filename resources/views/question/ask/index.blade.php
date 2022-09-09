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
                        <button v-if="tags == ''" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Chose tags
                        </button>
                        <button v-else class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div v-for="tags in tags">@{{tags+';'}}</div>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body d-flex row mx-0">
                            <div class="custom-control custom-checkbox col-3 pt-2">
                                <input type="checkbox" class="custom-control-input single-checkbox" id="customCheck5" name="tag" value="ck1" v-model="tags">
                                <label class="custom-control-label" for="customCheck5">checkbox</label>
                            </div>
                            <div class="custom-control custom-checkbox col-3 pt-2">
                                <input type="checkbox" class="custom-control-input single-checkbox" id="customCheck4" name="tag" value="ck2" v-model="tags">
                                <label class="custom-control-label" for="customCheck4">checkbox</label>
                            </div>
                            <div class="custom-control custom-checkbox col-3 pt-2">
                                <input type="checkbox" class="custom-control-input single-checkbox" id="customCheck2" name="tag" value="ck3" v-model="tags">
                                <label class="custom-control-label" for="customCheck2">checkbox</label>
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
                    <input type="file" name="image" id="file-2" class="inputfile">
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
        const { createApp } = Vue
        const vues = createApp({
            data() {
                return {
                    tags :[],
                }
            }
        }).mount("#app")
    </script>
    <script>
        $(document).ready(function () {
            $(".upload").click(function (e) { 
                e.preventDefault();
                $("#file-2").trigger('click');
            });

            // var limit = 2;
            // $('input.single-checkbox').on('change', function(evt) {
            // if($(".single-checkbox").siblings(':checked').length > limit) {
            //     this.checked = false;
            //     alert("max 3")
            // }
            // });

            $("#ask").submit(function (e) { 
                e.preventDefault();
                let text = $(".Editor-editor").html();
                let data = new FormData(this)
                data.append('text', text);
            
                $.ajax({
                    type: "POST",
                    url: "api/quest/store",
                    data: data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function (rsp) {
                        alert(rsp)
                        console.log(rsp);
                    }
                });
            });
        });
    </script>
@endpush